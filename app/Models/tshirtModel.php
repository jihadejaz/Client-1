<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tshirtModel extends Model
{
    use HasFactory;

    protected $table = 'tshirts';
    protected $fillable = [
        'tshirt_name',
        'tshirt_price',
        'tshirt_description',
        'tshirt_discounted_price',
        'tshirt_quantity',

        'tshirt_size_small',
        'tshirt_size_medium',
        'tshirt_size_large',
        'tshirt_size_xlarge',
        'tshirt_image',
    ];
}
