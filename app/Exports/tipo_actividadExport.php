<?php

namespace App\Exports;

use App\tipo_actividad;
use Maatwebsite\Excel\Concerns\FromCollection;

class tipo_actividadExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tipo_actividad::all();
    }
}
