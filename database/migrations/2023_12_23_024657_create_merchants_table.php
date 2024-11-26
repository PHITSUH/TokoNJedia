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
        Schema::create('merchants', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("user_id", 36);
            $table->foreign("user_id")->references("id")->on("user_data");
            $table->string("name", 255);
            $table->string("phone", 255);
            $table->string("status", 255);
            $table->string("image", 255);
            $table->string("catch_phrase", 255);
            $table->string("process_time", 255);
            $table->string("operational_time", 255);
            $table->string("banner_image", 255);
            $table->string("description", 255);
            $table->text("full_description");
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
        Schema::dropIfExists('merchants');
    }
};
