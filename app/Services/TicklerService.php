<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Debtor;
use App\Models\Tickler;
use App\Helper\BaseQuery;
use App\Mail\TicklerMail;
use App\Models\TicklerType;
use Illuminate\Support\Facades\Mail;

class TicklerService
{

    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Tickler();
    }

    public function index()

    {
        return $this->_model::paginate(10);
    }

    public function store(array $data, $debtor_id)

    {
        $ticklerMessageType = TicklerType::find($data['type']);
        $debtor = Debtor::find($debtor_id);
        if ($debtor) {
            $debtorEmail = $debtor->email;

            Mail::to($debtorEmail)->send(new TicklerMail($ticklerMessageType['type'], $debtor));

            $this->_model::create([
                'debtor_id' => $debtor_id,
                'type_id' => $data['type'],
                'sent_at' => Carbon::now(),
            ]);
        }
    }

    public function show($id)

    {
        return $this->get_by_id($this->_model, $id);
    }

    public function edit($id)

    {
        return $this->_model::find($id);
    }

    public function update($id, $data)
    {
        
        $message = TicklerType::find($data['type']);
        $updateTicklerMessage = $this->_model::find($id);

        if ($updateTicklerMessage) {

            $debtorId = Debtor::find($updateTicklerMessage->debtor_id);
           
            if ($debtorId) {
                $debtorEmail = $debtorId->email;
                Mail::to($debtorEmail)->send(new TicklerMail($message['type'], $debtorId));

                $updateTicklerMessage->type_id = $data['type'];
                $updateTicklerMessage->sent_at = Carbon::now();
                $updateTicklerMessage->update();

                return 'Email sent and tickler message updated successfully.';
            } else {
                return 'Debtor not found. Email and tickler message not sent.';
            }
        } else {
            return 'Tickler message not found for the given ID.';
        }
    }


    public function destroy($id)

    {
        $this->_model::find($id)->delete();
    }

    public function ticklerType()

    {
        return TicklerType::latest()->get();
    }

    public function saveTicklerType(array $data)

    {
        $saveType = new TicklerType;
        $saveType->type = $data['type'];
        $saveType->save();
    }

    public function showTicklerType($id)

    {
        return $this->get_by_id(new TicklerType, $id);
    }

    public function editTicklerType($id)

    {
        return TicklerType::find($id);
    }

    public function updateTicklerType($id, $data)

    {
        $updateTicklerType = TicklerType::find($id);
        $updateTicklerType->type = $data['type'];
        $updateTicklerType->status = $data['status'];
        $updateTicklerType->save();
    }

    public function destroyTicklerType($id)

    {
        TicklerType::find($id)->delete();
    }
}
