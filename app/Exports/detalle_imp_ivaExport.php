<?php

namespace App\Exports;

use App\detalle_imp_iva;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_imp_ivaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_imp_iva::all();
    }
}
