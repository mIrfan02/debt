<?php

namespace App\Http\Controllers;

use App\Services\NoteService;
use App\Http\Requests\NoteRequest;
use Spatie\Permission\Models\Role;
class NoteController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/notes';
    private $_route = 'notes';

    public function __construct()

    {
        $this->_service = new NoteService();
    }

    public function index()

    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }

    public function create()

    {
        $debtorid = request()->debtor;
        $roles = Role::all();
        if (!$debtorid) {
            abort(404);
        }
        return view($this->_directory . '.create', compact('debtorid','roles'));
    }

    public function store(NoteRequest $request)

    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Note Saved successfully!');
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
        $roles = Role::all();

        return view($this->_directory . '.edit', compact('data','roles'));
    }

    public function update(NoteRequest $request, $id)

    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Note updated successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)

    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Note deleted successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
