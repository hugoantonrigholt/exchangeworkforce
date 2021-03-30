<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class iQoutation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Qoutation;
    public function __construct($Qoutation)
    {
        $this->Qoutation = $Qoutation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $Qoutation = $this->Qoutation;
        return $this->from('website@exchangeworkforce.eu', 'EXCHANGE WORKFORCE')
                    ->subject('Nieuwe offerte aanvraag van: '.$Qoutation->company.'.')
                    ->markdown('mail-incoming.qoutation');
    }
}
