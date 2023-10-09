<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsModel extends Model
{
    use HasFactory;
    protected $table = 'products_models';
    protected $fillable = [


        'product_title',
        'product_image',
        'product_description',
        'product_stock',
        'product_price',
        'product_discount',
        'product_category',
        'product_type',
        'product_size',
        'product_color',


    ];
}
