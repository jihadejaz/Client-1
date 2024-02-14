<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    use HasFactory;
    protected $table = 'usercart';
    protected $fillable = [
        'order_id',
        'ordered_by',
        'product_id',
        'quantity',
        'size',
        'color',


        'customer_address',
        'customer_phone',




    ];
}
