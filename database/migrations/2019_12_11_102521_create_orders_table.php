<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('booking_number');
            $table->bigInteger('operator_id');
            $table->bigInteger('customer_id');
            $table->bigInteger('seat_id');
            $table->bigInteger('transport_id');
            $table->bigInteger('route_id');
            $table->time('payment_date');
            $table->bigInteger('payment_id');
            $table->string('approval_code');
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
        Schema::dropIfExists('orders');
    }
}
