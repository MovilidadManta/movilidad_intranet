<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarCodigo extends Mailable
{
    use Queueable, SerializesModels;
    public $codigo;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($codigo, $usuario)
    {
        $this->codigo = $codigo;
        $this->usuario = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Correos.codigo')
            ->from('movilidadmanta@gmail.com', 'TICS MOVILIDAD.')
            ->subject('Código de aprobación.');
    }
}
