<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_product_id',
        'price'
    ];

    public function type_product()
    {
        return $this->belongsTo(TypeProduct::class);
    }
}
