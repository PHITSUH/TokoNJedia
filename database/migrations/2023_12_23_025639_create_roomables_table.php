<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomables', function (Blueprint $table) {
            $table->string("room-id", 36)->primary();
            $table->foreign("room-id")->references("id")->on("rooms");
            $table->string("roomable_id", 36);
            $table->string("roomable_type", 255);
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
        Schema::dropIfExists('roomables');
    }
};
