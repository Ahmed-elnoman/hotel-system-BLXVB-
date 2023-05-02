<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoomTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types' , function(Blueprint $table) {
            $table->id();
            $table->integer('RoomPrice');
            $table->integer('DefaultRoomPrice');
            $table->string('RoomImage');
            $table->string('RoomDesc');
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
        Schema::dropIfExists('room_types');
    }
}
