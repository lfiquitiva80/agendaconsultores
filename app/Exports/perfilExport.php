<?php

namespace App\Exports;

use App\perfil;
use Maatwebsite\Excel\Concerns\FromCollection;

class perfilExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return perfil::all();
    }
}
