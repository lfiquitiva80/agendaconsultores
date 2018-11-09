<?php

namespace App\Exports;

use App\encabezado_imp_ica;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_imp_icaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_imp_ica::all();
    }
}
