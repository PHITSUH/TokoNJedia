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
        Schema::create('reviews', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("user_id", 36);
            $table->foreign("user_id")->references("id")->on("user_data");
            $table->string("transaction_id", 36);
            $table->foreign("transaction_id")->references("id")->on("transaction_headers");
            $table->string("product_id", 36);
            $table->foreign("product_id")->references("id")->on("products");
            $table->string("variant_bought", 255);
            $table->integer("review");
            $table->string("message", 255);
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
        Schema::dropIfExists('reviews');
    }
};
