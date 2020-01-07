<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billimport extends Model
{
    protected $table = 'bill_imports';
    protected $primaryKey = 'id_import';
    protected $fillable = [
        'id_user','name',
    ];
    public function user_import(){
        return $this->belongsTo('App\Models\Users', 'id_user', 'id_user');
    }
}
