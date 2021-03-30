<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class iSignup extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Signup;
    public function __construct($Signup)
    {
        $this->Signup = $Signup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $Signup = $this->Signup;
        return $this->from('website@exchangeworkforce.eu', 'EXCHANGE WORKFORCE')
                    ->subject('Nieuwe aanmelding: '.$Signup->email.'.')
                    ->markdown('mail-incoming.signup');
    }
}
