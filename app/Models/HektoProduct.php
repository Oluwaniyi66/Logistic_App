<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HektoProduct extends Model
{
    use HasFactory;
    protected $table = 'hekto_products';
    protected $fillable = [

    'name',
    'price',
     'discount',
     'p_image',
    'p_category',
   's_desc',
   'l_desc',
   'pd_img1',
   'pd_img2',
   'pd_img3',
   'pd_img4',
   'status'
    ];
}
