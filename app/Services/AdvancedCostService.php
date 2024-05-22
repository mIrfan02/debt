<?php

namespace App\Services;

use App\Models\Log;
use App\Models\Claim;
use App\Helper\BaseQuery;
use App\Models\AdvancedCost;

class AdvancedCostService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new AdvancedCost();
    }


    public function index()

    {
        return $this->get_all($this->_model);
    }


    public function store($data)
    {
        // Find the claim by ID or fail if it doesn't exist
        $advanceCost = Claim::findOrFail($data['claim_id']);

        // Update the remaining cost
        $advanceCost->remaining_cost += $data['cost_amount'];
        $advanceCost->save();

        // Log the allocation
        $logData = [
            'log_type' => 'Ad-Cost',
            'data' => $data,
            'claim_id' => $data['claim_id'],
        ];

        // Create a new log entry
        Log::create($logData);

        // Save the data to the main model
        return $this->add($this->_model, $data);
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
