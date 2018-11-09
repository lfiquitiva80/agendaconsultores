<?php

namespace App\Exports;

use App\calendario_tributario;
use Maatwebsite\Excel\Concerns\FromCollection;

class calendario_tributarioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return calendario_tributario::all();
    }
}
