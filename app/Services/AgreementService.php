<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\Agreement;
use App\Models\AgreementStage;

class AgreementService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Agreement();
    }


    public function index()

    {
        return $this->get_all($this->_model);
    }


    public function store($data)

    {
        $storeAgreement = $this->_model::create([
            'debtor_id' => $data['debtor_id'],
            'status' => $data['status'],
            'type' => $data['type'],
            'reason' => $data['reason'],
            'authority' => $data['authority'],
            'amount' => $data['amount'],
            'interest_rate' => $data['interest_rate'],
            'interest_amount' => $data['interest_amount'],
            'total_to_pay' => $data['total_to_pay'],
            'agreement_date' => $data['agreement_date'],
            'interest_from' => $data['interest_from'],
            'last_pay' => $data['last_pay'],
            'next_pay' => $data['next_pay'],
            'remarks' => $data['remarks'],
        ]);

        $storeAgreementStage = new AgreementStage();
        $storeAgreementStage->agreement_id = $storeAgreement['id'];
        $storeAgreementStage->stage = $data['stage'];
        $storeAgreementStage->pay_freq = $data['pay_freq'];
        $storeAgreementStage->no_of_pay = $data['no_of_pay'];
        $storeAgreementStage->pay_amount = $data['pay_amount'];
        $storeAgreementStage->stage_total = $data['stage_total'];
        $storeAgreementStage->first_pay_date = $data['first_pay_date'];
        $storeAgreementStage->last_pay_date = $data['last_pay_date'];
        $storeAgreementStage->remarks = $data['remarks'];

        $storeAgreementStage->save();
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
