<?php

namespace App\Exports;

use App\detalle_imp_retencion;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_imp_retencionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_imp_retencion::all();
    }
}
