<?php

namespace App\Exports;

use App\encabezado_imp_renta;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_imp_rentaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_imp_renta::all();
    }
}
