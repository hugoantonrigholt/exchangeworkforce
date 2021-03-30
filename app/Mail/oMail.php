<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class oMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $VacancyReply;
    public function __construct($VacancyReply)
    {
        $this->VacancyReply = $VacancyReply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $VacancyReply = $this->VacancyReply;
        return $this->from('website@exchangeworkforce.eu', 'EXCHANGE WORKFORCE')
                    ->subject('Hi, '.$VacancyReply->first_name.'. Bedankt voor je bericht!')
                    ->markdown('mail-outgoing.vacancy-reply');
    }
}
