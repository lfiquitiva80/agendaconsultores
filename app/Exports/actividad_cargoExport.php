<?php

namespace App\Exports;

use App\actividad_cargo;
use Maatwebsite\Excel\Concerns\FromCollection;

class actividad_cargoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return actividad_cargo::all();
    }
}
