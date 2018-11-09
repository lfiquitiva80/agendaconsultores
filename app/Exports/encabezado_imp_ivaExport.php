<?php

namespace App\Exports;

use App\encabezado_imp_iva;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_imp_ivaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_imp_iva::all();
    }
}
