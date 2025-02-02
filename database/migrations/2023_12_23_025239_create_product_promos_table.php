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
        Schema::create('product_promos', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("promo_id", 36);
            $table->foreign("promo_id")->references("id")->on("promos");
            $table->string("product_id", 36);
            $table->foreign("product_id")->references("id")->on("products");
            $table->integer("discount");
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
        Schema::dropIfExists('product_promos');
    }
};
