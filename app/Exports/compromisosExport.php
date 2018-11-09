<?php

namespace App\Exports;

use App\compromisos;
use Maatwebsite\Excel\Concerns\FromCollection;

class compromisosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return compromisos::all();
    }
}
