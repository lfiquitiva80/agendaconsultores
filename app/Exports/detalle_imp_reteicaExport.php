<?php

namespace App\Exports;

use App\detalle_imp_reteica;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_imp_reteicaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_imp_reteica::all();
    }
}
