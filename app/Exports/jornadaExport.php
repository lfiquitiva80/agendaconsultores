<?php

namespace App\Exports;

use App\jornada;
use Maatwebsite\Excel\Concerns\FromCollection;

class jornadaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return jornada::all();
    }
}
