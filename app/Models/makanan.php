<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    public function pesanandetail()
    {
        return $this->hasMany('App\pesanandetail','makanan_id','id');
    }
}
