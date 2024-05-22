<?php

namespace App\Http\Controllers;

use App\Services\CostService;
use App\Http\Requests\CostRequest;

class CostController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/costs';
    private $_route = 'costs';


    public function __construct()

    {
        $this->_service = new CostService();
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


    public function store(CostRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->back()->with('success', 'Something went wrong.');
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


    public function update(CostRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->back()->with('success', 'Something went wrong.');
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
