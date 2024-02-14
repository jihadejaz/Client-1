<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bagModel extends Model
{
    use HasFactory;

    protected $table = 'bags';
    protected $fillable = [
        'bag_name',
        'bag_price',
        'bag_description',
        'bag_discounted_price',
        

    
    ];
}
