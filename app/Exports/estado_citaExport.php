<?php

namespace App\Exports;

use App\estado_cita;
use Maatwebsite\Excel\Concerns\FromCollection;

class estado_citaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return estado_cita::all();
    }
}
