<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicklerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $debtor;


    public function __construct($data, $debtor)
    {
        $this->data = $data;
        $this->debtor = $debtor;
    }

    public function build()
    {
        $userName = $this->debtor['name'];
        $message = $this->data;

        return $this->subject('New Message Notification')
            ->view('emails.tickler_message')
            ->with([
                'userName' => $userName,
                'messages' => $message,
            ]);
    }
}
