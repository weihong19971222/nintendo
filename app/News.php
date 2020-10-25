<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_date', 'news_title','news_cont','news_img','news_yt_link','sort',
    ];
}
