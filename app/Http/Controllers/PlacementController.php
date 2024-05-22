<?php

namespace App\Http\Controllers;

use App\Services\PlacementService;
use App\Http\Requests\PlacementRequest;
use Illuminate\Http\Request;


class PlacementController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/placements';
    private $_route = 'placements';


    public function __construct()

    {
        $this->_service = new PlacementService();
    }


    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }


    public function create()


    {
        $debtorId = request()->debtor;

        return view($this->_directory . '.create',compact('debtorId'));
    }


    public function store(PlacementRequest $request)

    {
        $this->_service->store($request->validated());

        return redirect()->route($this->_route . '.index')->with('success', 'Something went wrong.');
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


    public function update(PlacementRequest $request, $id)

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
