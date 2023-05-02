<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class CreateRommsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('romms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type_id')->constrained('room_types', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('status');
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
        Schema::dropIfExists('romms');
    }
}
