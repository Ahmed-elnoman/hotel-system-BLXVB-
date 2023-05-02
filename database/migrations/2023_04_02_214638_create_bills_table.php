<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('roomCharge');
            $table->string('roomService');
            $table->string('micsCharge');
            $table->string('restaurantCharge');
            $table->string('ifLateCheckout');
            $table->string('paymentMode');
            $table->integer('creditCardNo');
            $table->softDeletes();
            $table->foreignId('guest_id')->constrained('guests', 'id');
            $table->foreignId('booking_id')->constrained('bookings', 'id');
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
        Schema::dropIfExists('bills');
    }
}
