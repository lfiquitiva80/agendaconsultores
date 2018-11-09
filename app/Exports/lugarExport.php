<?php

namespace App\Exports;

use App\lugar;
use Maatwebsite\Excel\Concerns\FromCollection;

class lugarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lugar::all();
    }
}
