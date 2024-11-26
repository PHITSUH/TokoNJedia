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
        Schema::create('user_data', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("username", 255);
            $table->string("email", 255);
            $table->string("password", 255);
            $table->string("phone", 255);
            $table->date("dob");
            $table->string("gender", 255);
            $table->string("image", 255);
            $table->string("google_id", 255);
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
        Schema::dropIfExists('users');
    }
};
