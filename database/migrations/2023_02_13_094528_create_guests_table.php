<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('gender');
            $table->integer('phone');
            $table->string('email');
            $table->string('passwors');
            $table->integer('passPortNo');
            $table->string('address');
            $table->string('city');
            $table->string('conutry');
            $table->integer('number_of_person');
            $table->softDeletes();
            $table->integer('age');
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
        Schema::dropIfExists('guests');
    }
}
