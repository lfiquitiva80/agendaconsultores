<?php

namespace App\Exports;

use App\encabezado_imp_retencion;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_imp_retencionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_imp_retencion::all();
    }
}
