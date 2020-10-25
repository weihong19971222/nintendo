<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('order_no');
            $table->string('receive_name');
            $table->string('receive_phone');
            $table->string('receive_address');
            $table->string('status')->default('新訂單');
            $table->integer('total_price');
            $table->string('remark','2000');
            $table->string('deliverymethod');
            $table->string('paymentmethod');

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
        Schema::dropIfExists('order');
    }
}
