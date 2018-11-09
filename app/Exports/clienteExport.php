<?php

namespace App\Exports;

use App\clientes;
use Maatwebsite\Excel\Concerns\FromCollection;

class clienteExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return clientes::all();
    }
}
