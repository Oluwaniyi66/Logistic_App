<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qoute extends Model
{
    use HasFactory;
    protected $table = 'qoutes';
    protected $fillable = [
       'name',
       'freight',
       'email',
       'phone',
       'distance',
       'weight',
       'pickup',
       'dropoff',
       'trackingID',
       'amount'

    ];
}
