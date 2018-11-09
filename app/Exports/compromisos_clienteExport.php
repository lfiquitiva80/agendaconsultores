<?php

namespace App\Exports;

use App\compromisos_cliente;
use Maatwebsite\Excel\Concerns\FromCollection;

class compromisos_clienteExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return compromisos_cliente::all();
    }
}
