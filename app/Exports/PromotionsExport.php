<?php

namespace App\Exports;

use App\Models\Promotion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PromotionsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Promotion::all();
    }
    public function headings():array
    {
        return [
            'id_promotion',
            'code_promotion',
            'sale',
            'from_date',
            'to_date',
            'created at',
            'updated at'
        ];
    }
}
