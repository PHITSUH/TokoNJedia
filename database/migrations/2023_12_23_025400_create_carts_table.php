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
        Schema::create('carts', function (Blueprint $table) {
            $table->string("user_id", 36);
            $table->string("variant_id", 36);
            $table->string("product_id", 36);
            $table->primary(["user_id", "variant_id", "product_id"]);
            $table->foreign("user_id")->references("id")->on("user_data");
            $table->foreign("variant_id")->references("id")->on("product_variants");
            $table->foreign("product_id")->references("id")->on("products");
            $table->integer("quantity");
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
        Schema::dropIfExists('carts');
    }
};
