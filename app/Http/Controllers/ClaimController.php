<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Debtor;
use App\Models\TicklerType;
use Illuminate\Http\Request;
use App\Services\ClaimService;
use Spatie\Permission\Models\Role;
use App\Http\Requests\ClaimRequest;
use App\Http\Controllers\Controller;


class ClaimController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/claims';
    private $_route = 'claims';


    public function __construct()

    {
        $this->_service = new ClaimService();
    }


    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }


    public function create()

    {
        if(request()->debtor){
            $roles = Role::all();

            $debtorId = request()->debtor;
            return view($this->_directory . '.create',compact('debtorId', 'roles'));
        }
        else{
            $debtorId=null;
            $roles = Role::all();

            $debtorInfo=Debtor::all();
            return view($this->_directory . '.create',compact('debtorId','debtorInfo','roles'));

        }

    }


    public function store(ClaimRequest $request)

    {

        $this->_service->store($request->validated());
        return redirect()->route($this->_route . '.index')->with('success', 'Stored Successfully.');
        try {
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }


    public function show($id)

    {

        $data = $this->_service->show($id);

        $roles = Role::all();
        $tickler_types = TicklerType::where('status', '1')->latest()->get();
        $logsplacement=Log::where('claim_id',$id)->get();
        return view($this->_directory . '.show', compact('data', 'roles', 'tickler_types','logsplacement'));
    }


    public function edit($id)

    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.edit', compact('data'));
    }


    public function update(ClaimRequest $request, $id)

    {
        $data = $this->_service->update($id, $request->validated());
        return response()->json([
            'message' => 'Successfully update the data',
            'data' => $data
        ]);
        // return redirect()->back()->with('success', 'Data Updation Success!.');
        try {
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
