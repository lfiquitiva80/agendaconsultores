<?php

namespace App\Exports;

use App\detalle_imp_renta;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_imp_rentaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_imp_renta::all();
    }
}
