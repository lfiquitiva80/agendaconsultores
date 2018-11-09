<?php

namespace App\Exports;

use App\detalle_dev_iva;
use Maatwebsite\Excel\Concerns\FromCollection;

class detalle_dev_ivaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return detalle_dev_iva::all();
    }
}
