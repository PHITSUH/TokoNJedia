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
        Schema::create('locations', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("city", 255);
            $table->string("country", 255);
            $table->string("address", 255);
            $table->string("notes", 255);
            $table->string("postal_code", 255);
            $table->double("latitude");
            $table->double("longitude");
            $table->string("locationable_id", 36);
            $table->string("locationable_type", 255);
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
        Schema::dropIfExists('locations');
    }
};
