<?php

namespace App\Http\Controllers;

use App\Services\LegalService;
use App\Http\Requests\LegalRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LegalController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/legals';
    private $_route = 'legals';


    public function __construct()

    {
        $this->_service = new LegalService();
    }


    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }


    public function create()

    {
        $claimId = request()->claimId;
        return view($this->_directory . '.create',compact('claimId'));
    }


    public function store(LegalRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->back()->with('success', 'Something went wrong.');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error in store method: ' . $th->getMessage());
            Log::error('Stack trace: ' . $th->getTraceAsString());
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


    public function update(LegalRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->back()->with('success', 'Data updated Success');
        } catch (\Throwable $th) {
            //throw $th;

            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }


    public function destroy($id)

    {
        $this->_service->destroy($id);
        return redirect()->back();
    }
}
