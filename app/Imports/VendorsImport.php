<?php

namespace App\Imports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VendorsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vendor([
            'id_vendor'=>$row['id_vendor'],
            'name_vendor'=>$row['name_vendor'],
            'phone_number'=>$row['phone_number'],
            'email'=>$row['email'],
            'adress'=>$row['adress']
        ]);
    }
}
