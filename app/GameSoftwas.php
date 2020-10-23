<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameSoftwas extends Model
{
    protected $fillable = [
        'game_name', 'game_image','publisher','language_chinese','version','date','classification','new_game','game_type','sort',
    ];
}
