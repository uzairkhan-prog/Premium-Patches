<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $clientData;

    public function __construct($clientData)
    {
        $this->clientData = $clientData;
    }

    public function build()
    {
        return $this->from('info@custompatch.org', 'Custom Patch')
            ->subject('New Contact Form Submission')
            ->html("
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$this->clientData['name']}</p>
            <p><strong>Email:</strong> {$this->clientData['email']}</p>
            <p><strong>Phone:</strong> {$this->clientData['phone']}</p>
            <p><strong>Service:</strong> {$this->clientData['service']}</p>
            <p><strong>Message:</strong> {$this->clientData['message']}</p>
        ");
    }
}
