<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cita)
    {
        $this->cita = $cita;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('olympus@olympus.com', 'Mailtrap')
            ->subject('Mailtrap Confirmation')
            ->view('mails.example', [
                'cita' => $this->cita
            ]);
    }
}
