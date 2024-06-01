<?php

namespace App\Services;

use App\Models\Log;
use App\Models\Claim;
use App\Helper\BaseQuery;
use App\Models\Placement;
use App\Models\PlacementComponent;
use App\Jobs\CalculateAccumulatedInterestJob;


class PlacementService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()
    {
        $this->_model = new Placement();
        $this->_model2 = new PlacementComponent();
    }


    public function index()
    {
        return $this->get_all($this->_model);
    }


    // public function store($data)

    // {
    //     return $this->add($this->_model, $data);
    // }

    // public function store($data)
    // {

    //     $claimId=$data['claim_id'];

    //     $placement = $this->add($this->_model, $data);

    //     $placementComponents = [];
    //     $componentTypes = ['principal', 'cost', 'attorney', 'interest'];

    //     // dd($data);
    //     $placementTotal=0;
    //     foreach ($componentTypes as $key => $type) {

    //         $amount = $data['amount'][$key] ?? null;
    //         $placementTotal += $amount;
    //     $componentData = [
    //         'name' => $type,
    //         'amount' => $data['amount'][$key] ?? null,
    //         'rate' => $data['rate'][$key] ?? null,
    //         'date' => $data['date'][$key] ?? null,
    //         'comments' => $data['comments'][$key] ?? null,
    //         'placement_total'=>$placementTotal,
    //         'placement_id' => $placement->id,

    //     ];
    //         $placementComponents[] = $this->add( $this->_model2, $componentData);
    //     }




    //      // Update remaining amounts in the claims table
    //    $this->updateRemainingAmountsInClaims($placement);

    //    // Dispatch a job to calculate accumulated interest
    //     dispatch(new CalculateAccumulatedInterestJob($placement));




    //     // $logData = [
    //     //     'log_type' => 'placement',
    //     //     'data' => ['placement' => $placement, 'placementComponents' => $placementComponents],
    //     //     'claim_id'=>$claimId,
    //     // ];

    //     // Log::create($logData);


    //     return ['placement' => $placement, 'placementComponents' => $placementComponents];
    // }

    public function store($data)
    {
        dd($data);
        die;
        $claimId = $data['claim_id'];

        // Separate the sliding scale data from the main data array
        $slidingScaleData = $data['sliding_scale'] ?? [];
        unset($data['sliding_scale']);

        // Store placement data
        $placement = $this->add($this->_model, $data);


        $logInterest = [
            'log_type' => 'Interest Start Date',
            'data' => $data['interest_start_date'],
            'claim_id' => $claimId
        ];

        Log::create($logInterest);

        // Update placement with sliding_scale data
        $formattedSlidingScaleData = [];
        foreach ($slidingScaleData as $row) {
            $percentage = $row['percentage'];
            $amount = $row['amount'];
            $formattedSlidingScaleData[$percentage] = $amount;
        }
        $placement->update(['sliding_scale' => json_encode($formattedSlidingScaleData)]);

        // Initialize method_rate variable

        $methodRate = null;
        // Determine method_rate based on contigency_method
        switch ($data['contigency_method']) {
            case 'fixed_rate':
                $methodRate = ['fixed_rate' => $data['method_rate']];
                break;
            case 'flat_fee':
                $methodRate = ['flat_fee' => $data['method_rate']];
                break;
            default:
                $methodRate = null;


                break;
        }



        // Initialize an array to store placement components
        $placementComponents = [];

        // Component types for different log types
        $componentTypes = ['principal', 'cost', 'attorney', 'interest', 'Addition'];

        foreach ($componentTypes as $key => $type) {
            // Get data for each component type
            $amount = $data['amount'][$key] ?? null;
            $rate = $data['rate'][$key] ?? null;
            $date = $data['date'][$key] ?? null;
            $comments = $data['comments'][$key] ?? null;

            // Create component data
            $componentData = [
                'name' => $type,
                'amount' => $amount,
                'rate' => $rate,
                'date' => $date,
                'comments' => $comments,
                'placement_total' => $amount,
                'placement_id' => $placement->id,
            ];

            // Store the component in the database
            $placementComponent = $this->add($this->_model2, $componentData);

            // Add the component to the array
            $placementComponents[] = $placementComponent;
        }

        // Store placement-related logs
        $logTypes = ['Placement - principal', 'Placement - cost', 'Placement - attorney', 'Placement - interest'];

        foreach ($logTypes as $logType) {
            // Get the index corresponding to the log type
            $logTypeIndex = array_search(strtolower(str_replace('Placement - ', '', $logType)), $componentTypes);

            // Create log data with only amount, rate, and comments
            $logData = [
                'log_type' => $logType,
                'data' => [
                    'amount' => $data['amount'][$logTypeIndex] ?? null,
                    'rate' => $data['rate'][$logTypeIndex] ?? null,
                    'comments' => $data['comments'][$logTypeIndex] ?? null,
                ],
                'claim_id' => $claimId,
            ];

            // Store the log entry in the database
            Log::create($logData);
        }

        // Update remaining amounts in the claims table
        $this->updateRemainingAmountsInClaims($placement);

        // Dispatch a job to calculate accumulated interest
        dispatch(new CalculateAccumulatedInterestJob($placement));


        // Update placement with method_rate
        if ($methodRate) {
            $placement->update(['method_rate' => json_encode($methodRate)]);
        }


        // Handle sliding scale data


        return ['placement' => $placement, 'placementComponents' => $placementComponents];
    }




    private function updateRemainingAmountsInClaims($placement)
    {
        // Retrieve the associated claim
        $claim = $placement->claim;

        if ($claim) {
            $principalAmount = $placement->placementComponent()
                ->where('name', 'principal')
                ->value('amount');


            $sumOfComponents = $placement->placementComponent()
                ->whereIn('name', ['cost', 'attorney', 'interest'])
                ->sum('amount');

            $claimUpdate = Claim::findOrFail($claim->id);
            $claimUpdate->remaining_principle = $principalAmount+$sumOfComponents;

            // $claimUpdate->remaining_cost = $sumOfComponents;
            $claimUpdate->save();
        } else {
            return redirect()->back()->with('error', 'Claim didn\'t exist');
        }
    }


    public function show($id)
    {
        return $this->get_by_id($this->_model, $id);
    }


    // public function update($id, $data)

    // {
    //     return $this->get_by_id($this->_model, $id)->update($data);
    // }
    public function update($id, $data)
    {
        $placement = $this->get_by_id($this->_model, $id);

        // Update Placement
        $placement->update([
            'placement_date' => $data['placement_date'],
            'contigency_method' => $data['contigency_method'],
            'method_rate' => $data['method_rate'],
            'interest_start_date' => $data['interest_start_date'],
            'allocation_method' => $data['allocation_method'],
            'interest_rate' => $data['interest_rate'],
            'interest_rate' => $data['interest_rate'],

        ]);

        // Update Placement Components
        $placementComponents = [];
        $componentTypes = ['principal', 'cost', 'attorney', 'interest'];
        $placementTotal = 0;

        foreach ($componentTypes as $key => $type) {
            $amount = $data['amount'][$key] ?? null;
            $placementTotal += $amount;

            $componentData = [
                'name' => $type,
                'amount' => $data['amount'][$key] ?? null,
                'rate' => $data['rate'][$key] ?? null,
                'date' => $data['date'][$key] ?? null,
                'comments' => $data['comments'][$key] ?? null,
                'placement_total' => $placementTotal,
                'placement_id' => $placement->id,
            ];

            // Check if the placement component exists and update or create accordingly
            $existingComponents = $placement->placementComponent()->where('placement_id', $id)->get();


            if ($existingComponents) {
                $existingComponents->update($componentData);
                $placementComponents[] = $existingComponents;
            } else {
                $placementComponents[] = $this->add($this->_model2, $componentData);
            }
        }

        return ['placement' => $placement, 'placementComponents' => $placementComponents];
    }



    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }
}
