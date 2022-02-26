<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HektoOrder extends Model
{
    use HasFactory;
    protected $table = 'hekto_orders';
    protected $fillable = [
                'userId',
                'userName',
                'userEmail',
                'paymentReference',
                'paymentTxId',
                'paymentStatus',
                'amount'
    ];
}
