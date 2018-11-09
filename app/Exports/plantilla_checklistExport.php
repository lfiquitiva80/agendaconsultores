<?php

namespace App\Exports;

use App\plantilla_checklist;
use Maatwebsite\Excel\Concerns\FromCollection;

class plantilla_checklistExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return plantilla_checklist::all();
    }
}
