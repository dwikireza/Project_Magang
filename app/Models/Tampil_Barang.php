<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tampil_Barang extends Model
{
    protected $table = "barang";

    public function type_product(){
        return $this->hasMany('App\TypeProduct');
    }

}
