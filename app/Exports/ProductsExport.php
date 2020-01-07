<?php

namespace App\Exports;
use App\Models\Promotion;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Unit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $Product = Product::all();
        foreach ($Product as $key => $Pro){
            $Cate = Catalog::find($Product[$key]->id_cata);
            $Product[$key]->id_cata = $Cate->name_cata;

            $Promotion = Promotion::find($Product[$key]->id_promotion);
            $Product[$key]->id_promotion = $Promotion->code_promotion;

            $Vendor = Vendor::find($Product[$key]->id_vendor);
            $Product[$key]->id_vendor = $Vendor->name_vendor;

            $Unit = Unit::find($Product[$key]->id_unit);
            $Product[$key]->id_unit = $Unit->name_unit;
        }
        return $Product;
    }

    public function headings():array
    {
        return [
            'id_pro',
            'Loại sản phẩm',
            'Mã sản phẩm',
            'Mã khuyến mãi',
            'Đơn vị',
            'Nhà cung cấp',
            'Tên sản phẩm',
            'Đơn giá',
            'Số lượng',
            'created at',
            'updated at'
        ];
    }
}
