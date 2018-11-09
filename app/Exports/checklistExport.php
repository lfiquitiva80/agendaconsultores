<?php

namespace App\Exports;

use App\checklist;
use Maatwebsite\Excel\Concerns\FromCollection;

class checklistExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return checklist::all();
    }
}
