<?php

namespace App\Exports;

use App\cargo;
use Maatwebsite\Excel\Concerns\FromCollection;

class cargoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cargo::all();
    }
}
