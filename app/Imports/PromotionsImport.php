<?php

namespace App\Imports;

use App\Models\Promotion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PromotionsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Promotion([
            'id_promotion'=>$row['id_promotion'],
            'code_promotion'=>$row['code_promotion'],
            'sale'=>$row['sale'],
            'from_date'=>$row['from_date'],
            'to_date'=>$row['to_date']
        ]);
    }
}
