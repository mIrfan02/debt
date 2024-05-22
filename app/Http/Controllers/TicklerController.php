<?php

namespace App\Http\Controllers;

use App\Models\TicklerType;
use App\Services\TicklerService;
use App\Http\Requests\TicklerRequest;
use App\Http\Requests\TicklerTypeRequest;

class TicklerController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/ticklers';
    private $_route = 'debtors.ticklers';

    public function __construct()

    {
        $this->_service = new TicklerService();
    }

    public function index()

    {
        $tickler_types = TicklerType::where('status', '1')->latest()->get();
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data', 'tickler_types'));
    }

    public function create()

    {
        return view($this->_directory . '.create');
    }

    public function store(TicklerRequest $request, $id)

    {
        try {
            $this->_service->store($request->validated(), $id);
            return redirect()->back()->with('success', 'Data stored & Email send successfully!');
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function show($id)

    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.show', compact('data'));
    }

    public function edit($id)

    {
        $tickler_types = TicklerType::where('status', '1')->latest()->get();
        $data = $this->_service->edit($id);
        return view($this->_directory . '.edit', compact('data', 'tickler_types'));
    }

    public function update(TicklerRequest $request, $id)

    {
       
        try {
        
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Data updated & Email send successfully!');
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)

    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Message deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.type')->with('error', 'Something went wrong.');
        }
    }

    public function ticklerType()

    {
        $data['all'] = $this->_service->ticklerType();
        return view($this->_directory . '.type.all', compact('data'));
    }

    public function saveTicklerType(TicklerTypeRequest $request)

    {
        try {
            $this->_service->saveTicklerType($request->validated());
            return redirect()->route($this->_route . '.type')->with('success', 'Data stored successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.type')->with('error', 'Something went wrong.');
        }
    }

    public function showTicklerType($id)

    {
        $data = $this->_service->showTicklerType($id);
        return view($this->_directory . '.type.show', compact('data'));
    }

    public function editTicklerType($id)

    {
        $data = $this->_service->editTicklerType($id);
        return view($this->_directory . '.type.edit', compact('data'));
    }

    public function updateTicklerType(TicklerTypeRequest $request, $id)

    {
        try {
            $this->_service->updateTicklerType($id, $request->validated());
            return redirect()->route($this->_route . '.type')->with('success', 'Data updated successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.type')->with('error', 'Something went wrong.');
        }
    }

    public function destroyTicklerType($id)

    {
        try {
            $this->_service->destroyTicklerType($id);
            return redirect()->route($this->_route . '.type')->with('success', 'Type deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.type')->with('error', 'Something went wrong.');
        }
    }
}
