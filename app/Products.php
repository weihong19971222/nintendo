<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected $fillable = [
        'products_name', 'products_image','products_price','products_type','products_info','products_quantity','sort',
    ];
}
