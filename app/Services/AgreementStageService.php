<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\AgreementStage;

class AgreementStageService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new AgreementStage();
    }


    public function index()

    {
        return $this->get_all($this->_model);
    }


    public function store($data)

    {
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
