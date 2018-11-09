<?php

namespace App\Exports;

use App\detalle_imp_ica;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_imp_icaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_imp_ica::all();
    }
}
