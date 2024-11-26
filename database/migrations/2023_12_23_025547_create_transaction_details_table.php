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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->string("transaction_id", 36);
            $table->string("product_id", 36);
            $table->string("variant_id", 36);
            $table->primary(["transaction_id", "product_id", "variant_id"]);
            $table->foreign("transaction_id")->references("id")->on("transaction_headers");
            $table->foreign("product_id")->references("id")->on("products");
            $table->foreign("variant_id")->references("id")->on("product_variants");
            $table->integer("quantity");
            $table->integer("price");
            $table->string("shipment_id", 36);
            $table->foreign("shipment_id")->references("id")->on("shipments");
            $table->string("status", 255);
            $table->string("promo_name", 255);
            $table->integer("discount");
            $table->integer("total_paid");
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
        Schema::dropIfExists('transaction_details');
    }
};
