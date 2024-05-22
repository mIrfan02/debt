<?php

namespace App\Http\Controllers;

use App\Services\AgreementService;
use App\Http\Requests\AgreementRequest;

class AgreementController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/agreements';
    private $_route = 'agreements';


    public function __construct()

    {
        $this->_service = new AgreementService();
    }


    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }


    public function create()

    {
        $debtorId = request()->debtor;
        return view($this->_directory . '.create', compact('debtorId'));
    }


    public function store(AgreementRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Something went wrong.');
        } catch (\Throwable $th) {
            throw $th;
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


    public function update(AgreementRequest $request, $id)

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
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
