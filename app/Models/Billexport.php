<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billexport extends Model
{
    protected $table = 'bill_exports';
    protected $primaryKey = 'id_export';
    protected $fillable = [
        'id_user','name',
    ];
    public function user_import(){
        return $this->belongsTo('App\Models\Users', 'id_user', 'id_user');
    }
}
