<?php

namespace App\Http\Controllers;

use App\Services\AdvancedCostService;
use App\Http\Requests\AdvancedCostRequest;

class AdvancedCostController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/advancedcosts';
    private $_route = 'advancedcosts';


    public function __construct()

    {
        $this->_service = new AdvancedCostService();
    }


    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }


    public function create()

    {
        return view($this->_directory . '.create');
    }


    public function store(AdvancedCostRequest $request)

    {
        $this->_service->store($request->validated());
        return redirect()->route($this->_route . '.index')->with('success', 'Data Stored Success.');
        try {
        } catch (\Throwable $th) {
            //throw $th;
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


    public function update(AdvancedCostRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Something went wrong.');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }


    public function destroy($id)

    {
        $this->_service->destroy($id);
        return redirect()->route($this->_route . '.index');
    }
}
