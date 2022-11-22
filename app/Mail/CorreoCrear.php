<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoCrear extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;
    public $empleado;
    public $servicios;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cita, $empleado, $servicios)
    {
        $this->cita = $cita;
        $this->empleado = $empleado;
        $this->servicios = $servicios;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('olympus@olympus.com', 'Olympus')
            ->subject('Resumen de tu cita')
            ->view('mails.crear-cita', [
                'cita' => $this->cita,
                'empleado' => $this->empleado,
                'servicios' => $this->servicios,
            ]);
    }
}
