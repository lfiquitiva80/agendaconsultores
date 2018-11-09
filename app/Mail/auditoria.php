<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class auditoria extends Mailable
{
    use Queueable, SerializesModels;


    public $store;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($store)
    {
        $this->store = $store;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
        return $this->markdown('emails.auditoria.auditoria')->subject('Auditoria para el cliente '.$this->store->clientes->nombre_cliente." , Checklist ".$this->store->checklista->descripcion.' #'.$this->store->id)->with([
                        'responsable' => $this->store->usuarios->name,
                        'checklist' => $this->store->checklista->descripcion,
                        'cliente' => $this->store->clientes->nombre_cliente,
                        'auditor' => $this->store->auditores->name,
                        'Observacion' => $this->store->Observaciones,
                        'fecha_elaboracion' => $this->store->fecha_elaboracion,
                        'id' => $this->store->id,

                    ]);
    }
}
