<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained('guests', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('room_id')->constrained('romms', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('bookingDate');
            $table->date('arrivelDate');
            $table->date('departureDate');
            $table->integer('numbChildren');
            $table->string('specialReq');
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
        Schema::dropIfExists('bookings');
    }
}
