<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HektoShipUser extends Model
{
    use HasFactory;
    protected $table = 'hekto_ship_users';
    protected $fillable = [

    'phone',
    'fname',
    'lname',
    'address',
    'suit',
    'city',
    'country',
    'code'
    ];
}
