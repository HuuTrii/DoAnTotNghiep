<?php

namespace App\Exports;

use App\Models\Unit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UnitsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Unit::all();
    }
    public function headings():array
    {
        return [
            'id_unit',
            'name_unit',
            'acronym',
            'created at',
            'updated at'
        ];
    }
}
