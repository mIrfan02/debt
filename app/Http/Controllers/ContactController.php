<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/contacts';
    private $_route = 'contacts';

    public function __construct()

    {
        $this->_service = new ContactService();
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

    public function store(ContactRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Contact stored successfully!');
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

    public function update(Request  $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Contact updated successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    // bulk update code for update the contacts in summmary tab form


    public function bulkUpdate(Request $request)
    {

        $request->validate([
            'contacts' => 'required|array',
        ]);
    

        $this->_service->bulkUpdate($request->all());

        return redirect()->back()->with('success', 'Contacts updated successfully.');
    }




    public function destroy($id)

    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Contact deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
