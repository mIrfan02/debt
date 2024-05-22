<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\Note;

class NoteService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Note();
    }


    public function index()

    {
        return $this->get_all($this->_model);
    }

    public function store($data)

    {
        $notableType = request()->has('debtorid') ? Debtor::class : Client::class;
        $data['notable_type'] = $notableType;
        $data['notable_id'] = request()->debtorid;
        return $this->add($this->_model, $data);
    }


    //     public function store($data)
    // {
    //     try {
    //          $this->add($this->_model, $data);

    //         if ($debtor) {
    //             $noteData = [
    //                 'title' => $data['title'],
    //                 'note' => $data['note'],
    //             ];

    //             // Create a new note for the debtor using the notes() relationship
    //             $debtor->notes()->create($noteData);

    //             return redirect()->route($this->_route . '.index')->with('success', 'Note added successfully.');
    //         }

    //         return redirect()->route($this->_route . '.index')->with('error', 'Debtor not found.');
    //     } catch (\Throwable $th) {
    //         // Handle any exceptions as needed
    //         throw $th;
    //     }
    // }

    public function show($id)

    {
        return $this->get_by_id($this->_model, $id);
    }


    public function update($id, $data)

    {
        return $this->get_by_id($this->_model, $id)->update($data);
    }

    public function destroy($id)

    {
        return $this->delete($this->_model, $id);
    }
}
