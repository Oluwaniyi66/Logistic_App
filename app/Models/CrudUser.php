<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudUser extends Model
{
    use HasFactory;
    protected $table = 'crud_users';
    protected $fillable = [

    'name',
    'email',
     'job',
     'phone',
    'location',
   'image'
    ];
}
