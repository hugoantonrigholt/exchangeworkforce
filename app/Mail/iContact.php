<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class iContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Contact;
    public function __construct($Contact)
    {
        $this->Contact = $Contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $Contact = $this->Contact;
        return $this->from('website@exchangeworkforce.eu', 'EXCHANGE WORKFORCE')
                    ->subject('Nieuw bericht van: '.$Contact->first_name.' '.$Contact->last_name.'.')
                    ->markdown('mail-incoming.contact');
    }
}
