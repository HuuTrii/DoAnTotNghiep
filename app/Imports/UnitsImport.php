<?php

namespace App\Imports;

use App\Models\Unit;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UnitsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Unit([
            'id_unit'=>$row['id_unit'],
            'name_unit'=>$row['name_unit'],
            'acronym'=>$row['acronym']
        ]);
    }
}
