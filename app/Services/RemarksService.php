<?php

namespace App\Services;

use App\Models\Debtor;
use App\Models\Remark;
use App\Helper\BaseQuery;

class RemarksService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Remark();
    }

    public function index()

    {
        return $this->_model::paginate(10);
    }

    public function store($data)

    {
        $notableType = request()->has('debtorid') ? Debtor::class : Client::class;
        $data['notable_type'] = $notableType;
        $data['notable_id'] = request()->debtorid;

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
        $this->_model::find($id)->delete();
    }
}
