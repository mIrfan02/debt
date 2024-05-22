<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\TicklerType;
use App\Services\DebtorService;
use App\Http\Requests\DebtorRequest;

class DebtorController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/debtors';
    private $_route = 'debtors';

    public function __construct()

    {
        $this->_service = new DebtorService();
    }

    public function index()

    {
        $tickler_types = TicklerType::where('status','1')->latest()->get();
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data','tickler_types'));
    }

    public function create()

    {
        $clients = Client::latest()->get();
        return view($this->_directory . '.create', compact('clients'));
    }

    public function store(DebtorRequest $request)

    {



        try {
            $debtor = $this->_service->store($request->validated());

            if ($debtor) {
                return redirect()->route($this->_route . '.index')->with('success', 'Debtor stored successfully!');
            }
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        } catch (\Throwable $th) {
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
        $clients = Client::latest()->get();
        $data = $this->_service->show($id);
        return view($this->_directory . '.edit', compact('data','clients'));
    }


    public function update(DebtorRequest $request, $id)

    {
        $this->_service->update($id, $request->validated());
        return redirect()->route($this->_route . '.index')->with('success', 'Debtor updated successfully!');
        try {
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)

    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Debtor deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
