<?php

namespace App\Exports;

use App\actividad;
use Maatwebsite\Excel\Concerns\FromCollection;

class actividadExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return actividad::all();
    }
}
