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
        Schema::create('products', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("name", 255);
            $table->string("description", 255);
            $table->string("condition", 255);
            $table->string("merchant_id", 36);
            $table->foreign("merchant_id")->references("id")->on("merchants");
            $table->string("product_category_id", 255);
            $table->foreign("product_category_id")->references("id")->on("product_categories");
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
        Schema::dropIfExists('products');
    }
};
