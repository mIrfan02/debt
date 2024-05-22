<?php

namespace App\Http\Controllers;

use App\Services\RemarksService;
use App\Http\Requests\RemarksRequest;

class RemarkController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/debtors/remarks';
    private $_route = 'debtors.remarks';

    public function __construct()

    {
        $this->_service = new RemarksService();
    }

    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }

    public function create($debtor)

    {
        return view($this->_directory . '.create', compact('debtor'));
    }

    public function store(RemarksRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Remarks stored successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }


    public function show($id)

    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.show', compact('data'));
    }


    public function edit($id)

    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.edit', compact('data'));
    }


    public function update(RemarksRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Remark updated successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)

    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Remark deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
