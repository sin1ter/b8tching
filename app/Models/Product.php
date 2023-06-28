<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'product_id' ;
    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'image',
        'quantity',
        'category',
        'size'
    ];
}
