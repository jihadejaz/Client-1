<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahamodel extends Model
{
    use HasFactory;
    protected $table = 'usersdata';
    protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
        'Role'
    ];
}
