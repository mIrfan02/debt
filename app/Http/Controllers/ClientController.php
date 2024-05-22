<?php

namespace App\Http\Controllers;

use App\Services\ClientService;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/clients';
    private $_route = 'clients';


    public function __construct()

    {
        $this->_service = new ClientService();
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


    public function store(ClientRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Client created successfully!');
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


    public function update(ClientRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Client updated successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }


    public function destroy($id)

    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Client deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
