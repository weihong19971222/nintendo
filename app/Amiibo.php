<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amiibo extends Model
{
    protected $table='amiibo';
    protected $fillable = [
        'amiibo_name', 'amiibo_image','amiibo_type','sort',
    ];
}
