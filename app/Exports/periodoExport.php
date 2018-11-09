<?php

namespace App\Exports;

use App\periodo;
use Maatwebsite\Excel\Concerns\FromCollection;

class periodoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return periodo::all();
    }
}
