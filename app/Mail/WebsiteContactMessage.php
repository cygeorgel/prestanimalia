<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\WebsiteContact;

class WebsiteContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_id)
    {
        $this->contact_id = $contact_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $contact_id = $this->contact_id;

        $contact = WebsiteContact::find($contact_id);

        return $this->subject('Votre demande d\'information')
        ->with(compact('contact'))
        ->view('emails.websiteContact');
    }
}
