<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = 
    [
    'id',
    'full_name',
    'email',
    'phone',
    'mobile',
    ];

}
