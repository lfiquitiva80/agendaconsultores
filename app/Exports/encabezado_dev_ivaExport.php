<?php

namespace App\Exports;

use App\encabezado_dev_iva;
use Maatwebsite\Excel\Concerns\FromCollection;

class encabezado_dev_ivaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return encabezado_dev_iva::all();
    }
}
