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
        Schema::create('electric_transaction_details', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->foreign("id")->references("id")->on("transaction_headers");
            $table->string("electric_token", 36);
            $table->string("subscription_number", 255);
            $table->integer("nominal");
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
        Schema::dropIfExists('electric_transaction_details');
    }
};
