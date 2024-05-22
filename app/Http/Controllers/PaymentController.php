<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/payments';
    private $_route = 'payments';


    public function __construct()

    {
        $this->_service = new PaymentService();
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


    public function store(PaymentRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->back()->with('success', 'Payments Added Successfully.');
        } catch (\Throwable $th) {
            //throw $th;
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
        $data = $this->_service->show($id);
        return view($this->_directory . '.edit', compact('data'));
    }


    public function update(PaymentRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->back()->with('success', 'Something went wrong.');
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
