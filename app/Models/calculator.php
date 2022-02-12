<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calculator extends Model
{
    use HasFactory;
    protected $table ='calculators';
    protected $fillable = [
        'roadfrieght',
        'airfrieght',
        'shipfreight',
        'distance',
        'weight'
    ];
}
