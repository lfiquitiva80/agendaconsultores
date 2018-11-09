<?php

namespace App\Exports;

use App\pago_cliente;
use Maatwebsite\Excel\Concerns\FromCollection;

class pago_clienteExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pago_cliente::all();
    }
}
