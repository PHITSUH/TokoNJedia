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
        Schema::create('messages', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("room_id", 36);
            $table->foreign("room_id")->references("id")->on("rooms");
            $table->string("messages", 255);
            $table->string("messagable_id", 36);
            $table->string("messagable_type", 255);
            $table->timestamp("read_at");
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
        Schema::dropIfExists('messages');
    }
};
