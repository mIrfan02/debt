<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\Contact;

class ContactService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Contact();
    }

    public function index()

    {
        return $this->get_all($this->_model);
    }

    public function store(array $data)

    {
        $contactableType = request()->has('debtorId') ? Debtor::class : Client::class;
        $debtorId = request()->debtorId;

        foreach ($data['contacts'] as $contactData) {
            $contactData['contactable_type'] = $contactableType;
            $contactData['contactable_id'] = $debtorId;
            $this->add($this->_model, $contactData);
        }
    }

    public function show($id)

    {
        return $this->get_by_id($this->_model, $id);
    }

    public function update($id, $data)

    {

        foreach ($data['contacts'] as $contactData) {
            return $this->get_by_id($this->_model, $id)->update($contactData);
        }
    }

// bulk update code for summary tab form
    public function bulkUpdate(array $data)
    {
        foreach ($data['contacts'] as $contactId => $contactData) {

            $contact = Contact::findOrFail($contactId);
            $contact->update($contactData);
        }
    }



    public function destroy($id)

    {
        return $this->delete($this->_model, $id);
    }
}
