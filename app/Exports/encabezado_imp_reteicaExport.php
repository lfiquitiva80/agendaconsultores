<?php

namespace App\Exports;

use App\encabezado_imp_reteica;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_imp_reteicaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_imp_reteica::all();
    }
}
