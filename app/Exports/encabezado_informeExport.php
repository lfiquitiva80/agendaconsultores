<?php

namespace App\Exports;

use App\encabezado_informe;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_informeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_informe::all();
    }
}
