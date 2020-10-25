<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('news_date');
            $table->string('news_title');
            $table->string('news_cont');
            $table->string('news_img');
            $table->string('news_yt_link');
            $table->string('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_news');
    }
}
