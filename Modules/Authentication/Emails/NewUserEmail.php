<?php

namespace Modules\Authentication\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class NewUserEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuarioNuevo)
    {
      $this->usuario = $usuarioNuevo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('emails.new.user')->with([
        'fecha_actual' => Carbon::now(),
      ]);
    }
}
