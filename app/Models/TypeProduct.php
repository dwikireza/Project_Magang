<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
     use HasFactory;
    protected $fillable = ['type_product',

    ];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
