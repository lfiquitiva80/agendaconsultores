<?php

namespace App\Exports;

use App\detalle_informe;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_informeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_informe::all();
    }
}
