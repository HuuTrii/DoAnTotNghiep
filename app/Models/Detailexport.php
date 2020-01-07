<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detailexport extends Model
{
    protected $table = 'detail_exports';
    protected $primaryKey = 'id_detail_export';
    protected $fillable = [
        'id_export','id_pro','quantity',
    ];

    public function import(){
        return $this->belongsTo('App\Models\Billimport', 'id_import', 'id_import');
    }
    public function products(){
        return $this->belongsTo('App\Models\Product', 'id_pro', 'id_pro');
    }
}
