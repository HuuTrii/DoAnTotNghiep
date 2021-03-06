<?php

namespace App\Exports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VendorsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vendor::all();
    }
    public function headings():array
    {
        return [
            'id_vendor',
            'name_vendor',
            'phone_number',
            'email',
            'adress',
            'created at',
            'updated at'
        ];
    }
}
