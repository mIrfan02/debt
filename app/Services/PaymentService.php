<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\Claim;
use App\Models\Log;
use App\Models\Payment;
use App\Models\Placement;
use App\Models\PlacementComponent;
use Carbon\Carbon;

class PaymentService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()
    {
        $this->_model = new Payment();
    }


    public function index()
    {
        return $this->get_all($this->_model);
    }



    public function store($data)
    {
        $claimId = $data['claim_id'];
        $payamount = $data['amount'];
        $amountpay=$data['amount'];    // this amount variable used for method rate because payamount was override by allocation method and advance cost
        $placement = Placement::where('claim_id', $claimId)->first();

        // Fetch the last payment
        $lastPayment = Payment::where('claim_id', $claimId)
            ->latest('created_at')
            ->first();

        // If there is no last payment, use the placement date as the first date
        if (!$lastPayment) {
            $placement = Placement::where('claim_id', $claimId)->first();
            $firstDate = Carbon::parse($placement->placement_date);
        } else {
            $firstDate = Carbon::parse($lastPayment->date_paid);
        }

        $secondDate = Carbon::parse($data['date_paid']);

        $daysDifference = $firstDate->diffInDays($secondDate);

        $components = PlacementComponent::where('placement_id', $placement->id)->get();

        $componentTypes = ['principal', 'cost', 'attorney', 'interest'];
        $accumulatedInterest = 0;
        // $iteration = 0;
        foreach ($componentTypes as $type) {
            $component = $components->firstWhere('name', $type);

            if ($component) {
                $amount = $component->amount;
                $interestRate = $component->rate;

                $dailyInterest = ($amount * $interestRate * $daysDifference) / 365;

                $accumulatedInterest += $dailyInterest;

                // $iteration++;

                // if ($iteration == 3) {
                //     dd($accumulatedInterest);
                // }
            }
        }

        // Format accumulated interest to display two digits after the decimal point
        $formattedAccumulatedInterest = number_format($accumulatedInterest, 2);
        $data['interest'] = $formattedAccumulatedInterest;
        // dd($accumulatedInterest,$formattedAccumulatedInterest,$data['interest']);





        if ($placement) {
            $this->add($this->_model, $data);




              $claim = Claim::where('id', $claimId)->first();
            // if ($claim->advance_cost > 0) {
            //     $advanceCostDeducted = min($payamount, $claim->advance_cost);
            //     $payamount -= $advanceCostDeducted;
            //     $claim->advance_cost -= $advanceCostDeducted;
            //     if ($claim->advance_cost <= 0) {
            //         $claim->advance_cost = 0;
            //     }
            //     $claim->save();
            // }


            // dd($payamount,'ir');
            // if ($claim->advance_cost == 0  && $payamount > 0) {
                // dd($payamount);
                $allocationMethod = $placement->allocation_method;
                switch ($allocationMethod) {
                case 'CIP':
                    $this->allocateCIP($claim, $payamount);
                    break;
                case 'CPI':
                    $this->allocateCPI($claim, $payamount);
                    break;
                case 'PCI':

                    $this->allocatePCI($claim, $payamount);
                    break;
                case 'PIC':
                    $this->allocatePIC($claim, $payamount);
                    break;
                case 'IPC':
                    $this->allocateIPC($placement, $payamount);
                    break;
                case 'ICP':
                    $this->allocateICP($claim, $payamount);
                    break;

                default:
                    return redirect()->back()->with('error', 'Unknown allocation method');
            }
        // }
            if ($placement->method_rate !== null) {
                $methodRate = json_decode($placement->method_rate, true);

                if (isset($methodRate['fixed_rate'])) {
                    $ratePercentage = $methodRate['fixed_rate'];
                    $agency = ($amountpay * $ratePercentage) / 100;
                    $remainingAmount = $amountpay - $agency;



                    $data['client'] = $remainingAmount;
                    $data['agency'] = $agency;
                    //  $paymentDivded=['client'=>$remainingAmount,'agency'=>$rate];

                    $logData = [
                        'log_type' => 'payment',
                        'data' => $data,
                        'claim_id' => $claimId,
                    ];

                    Log::create($logData);
                } elseif (isset($methodRate['flat_fee'])) {
                    $flatFee = $methodRate['flat_fee'];
                    $rate = $flatFee;
                    $remainingAmount = $amountpay - $flatFee;
                } else {
                    return redirect()->back()->with('error', 'Method not fetching');
                }
            } elseif ($placement->sliding_scale !== null) {
                dd("scale");
            } else {
                dd("else");
            }






            return redirect()->back()->with('success', 'Payment added successfully');
        } else {
            return redirect()->back()->with('error', 'Placement not found for the given claim_id');
        }
    }


    private function allocateCPI($claim, $paymentAmount)
    {
        $remainingAmount = $paymentAmount;

        while ($claim->remaining_cost > 0 && $remainingAmount > 0) {
            $deductAmount = min($remainingAmount, $claim->remaining_cost);
            $claim->remaining_cost -= $deductAmount;
            $remainingAmount = max(0, $remainingAmount - $deductAmount);
        }

        if ($claim->remaining_cost == 0) {
            while ($claim->remaining_principle > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_principle);
                $claim->remaining_principle -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);
            }
        }

        if ($claim->remaining_cost == 0 && $claim->remaining_principle == 0 && $remainingAmount > 0) {
            while ($claim->accumulated_interest > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->accumulated_interest);
                $claim->accumulated_interest -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        $claim->save();
    }

    // private function allocateCIP($claim, $paymentAmount)
    // {
    //     $remainingAmount = $paymentAmount; // Track remaining amount to allocate

    //     while ($claim->remaining_cost > 0 && $remainingAmount > 0) {
    //         $deductAmount = min($remainingAmount, $claim->remaining_cost);
    //         $claim->remaining_cost -= $deductAmount;
    //         $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
    //     }

    //     if ($claim->remaining_cost == 0) {
    //         while ($claim->accumulated_interest > 0 && $remainingAmount > 0) {
    //             $deductAmount = min($remainingAmount, $claim->accumulated_interest);
    //             $claim->accumulated_interest -= $deductAmount;
    //             $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
    //         }
    //     }

    //     if ($claim->remaining_cost == 0 && $claim->accumulated_interest == 0 && $remainingAmount > 0) {
    //         while ($claim->remaining_principle > 0 && $remainingAmount > 0) {
    //             $deductAmount = min($remainingAmount, $claim->remaining_principle);
    //             $claim->remaining_principle -= $deductAmount;
    //             $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
    //         }
    //     }

    //     $claim->save();
    // }

    private function allocateCIP($claim, $paymentAmount)
{
    $remainingAmount = $paymentAmount; // Track remaining amount to allocate

    // Deduct from remaining cost
    if ($claim->remaining_cost > 0 && $remainingAmount > 0) {
        $deductAmount = min($remainingAmount, $claim->remaining_cost);
        $claim->remaining_cost -= $deductAmount;
        $remainingAmount -= $deductAmount;
    }

    // Deduct from accumulated interest
    if ($claim->remaining_cost == 0 && $claim->accumulated_interest > 0 && $remainingAmount > 0) {
        $deductAmount = min($remainingAmount, $claim->accumulated_interest);
        $claim->accumulated_interest -= $deductAmount;
        $remainingAmount -= $deductAmount;
    }

    // Deduct from remaining principle
    if ($claim->remaining_cost == 0 && $claim->accumulated_interest == 0 && $claim->remaining_principle > 0 && $remainingAmount > 0) {
        $deductAmount = min($remainingAmount, $claim->remaining_principle);
        $claim->remaining_principle -= $deductAmount;
        $remainingAmount -= $deductAmount;
    }

    // Distribute remaining amount between agency and client
    if ($remainingAmount > 0) {
        $agency = min($claim->agency_remaining, $remainingAmount);
        $client = $remainingAmount - $agency;

        // Update remaining amounts
        $claim->agency_remaining -= $agency;
        $claim->client_remaining -= $client;

        // Log the allocation
        $logData = [
            'log_type' => 'payment',
            'data' => [
                'client' => $client,
                'agency' => $agency
            ],
            'claim_id' => $claim->id,
        ];

        Log::create($logData);
    }

    $claim->save();
}




    // this function is also working correctly now it is fine PCI tested
    private function allocatePCI($claim, $paymentAmount)
    {
        $remainingAmount = $paymentAmount; // Track remaining amount to allocate

        while ($claim->remaining_principle > 0 && $remainingAmount > 0) {
            $deductAmount = min($remainingAmount, $claim->remaining_principle);
            $claim->remaining_principle -= $deductAmount;
            $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
        }

        if ($claim->remaining_principle == 0) {
            while ($claim->remaining_cost > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_cost);
                $claim->remaining_cost -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        if ($claim->remaining_principle == 0 && $claim->remaining_cost == 0 && $remainingAmount > 0) {
            while ($claim->accumulated_interest > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->accumulated_interest);
                $claim->accumulated_interest -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        $claim->save();
    }

    //below code is fine working  tested the PIC function with ouput
    private function allocatePIC($claim, $paymentAmount)
    {
        $remainingAmount = $paymentAmount; // Track remaining amount to allocate

        while ($claim->remaining_principle > 0 && $remainingAmount > 0) {
            $deductAmount = min($remainingAmount, $claim->remaining_principle);
            $claim->remaining_principle -= $deductAmount;
            $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
        }

        if ($claim->remaining_principle == 0) {


            while ($claim->accumulated_interest > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->accumulated_interest);
                $claim->accumulated_interest -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }
        // If both principal and interest are zero and there's remaining amount, move to cost
        if ($claim->remaining_principle == 0 && $claim->accumulated_interest == 0 && $remainingAmount > 0) {
            while ($claim->remaining_cost > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_cost);
                $claim->remaining_cost -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        $claim->save();
    }




    private function allocateIPC($claim, $paymentAmount)
    {
        $remainingAmount = $paymentAmount; // Track remaining amount to allocate

        while ($claim->accumulated_interest > 0 && $remainingAmount > 0) {
            $deductAmount = min($remainingAmount, $claim->accumulated_interest);
            $claim->accumulated_interest -= $deductAmount;
            $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
        }

        if ($claim->accumulated_interest == 0) {
            while ($claim->remaining_principle > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_principle);
                $claim->remaining_principle -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        if ($claim->accumulated_interest == 0 && $claim->remaining_principle == 0 && $remainingAmount > 0) {
            while ($claim->remaining_cost > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_cost);
                $claim->remaining_cost -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        $claim->save();
    }

    private function allocateICP($claim, $paymentAmount)
    {
        $remainingAmount = $paymentAmount; // Track remaining amount to allocate

        // Deduct from interest first
        while ($claim->accumulated_interest > 0 && $remainingAmount > 0) {
            $deductAmount = min($remainingAmount, $claim->accumulated_interest);
            $claim->accumulated_interest -= $deductAmount;
            $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
        }

        // If interest is zero and there's remaining amount, move to cost
        if ($claim->accumulated_interest === 0 && $remainingAmount > 0) {
            while ($claim->remaining_cost > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_cost);
                $claim->remaining_cost -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        // If both interest and cost are zero and there's remaining amount, move to principal
        if ($claim->accumulated_interest === 0 && $claim->remaining_cost === 0 && $remainingAmount > 0) {
            while ($claim->remaining_principle > 0 && $remainingAmount > 0) {
                $deductAmount = min($remainingAmount, $claim->remaining_principle);
                $claim->remaining_principle -= $deductAmount;
                $remainingAmount = max(0, $remainingAmount - $deductAmount);  // Ensure remaining amount is non-negative
            }
        }

        $claim->save();
    }





    public function show($id)
    {
        return $this->get_by_id($this->_model, $id);
    }


    public function update($id, $data)
    {
        return $this->get_by_id($this->_model, $id)->update($data);
    }


    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }
}