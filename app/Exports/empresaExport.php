<?php

namespace App\Exports;

use App\empresa;
use Maatwebsite\Excel\Concerns\FromCollection;

class empresaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return empresa::all();
    }
}
