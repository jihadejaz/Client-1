<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfumeModel extends Model
{
    use HasFactory;

    protected $table = 'perfumes';
    protected $fillable = [
        'perfume_name',
        'perfume_price',
        'perfume_description',
        'perfume_discounted_price',
        'perfume_black',
        'perfume_brown',
    ];
}
