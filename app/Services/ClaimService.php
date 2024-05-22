<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\Claim;
use App\Models\Debtor;

class ClaimService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Claim();
    }


    public function index()

    {
        return $this->get_all($this->_model);
    }

    public function store($data)





{
    // dd($data);
    // Generate the claim number based on the latest record in the database


    if($data['debtor_id']==null){

        $debtorData=Debtor::findOrFail($data['debtor_person']);
        $data['debtor_id']=$debtorData->id;
        $data['debtor_person']=$debtorData->name;

    }

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
