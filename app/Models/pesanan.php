<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function pesanandetail()
    {
        return $this->hasMany('App\pesanandetail','pesanan_id','id');
    }

}
