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
        Schema::create('review_videos', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string("review_id", 36);
            $table->foreign("review_id")->references("id")->on("reviews");
            $table->string("video", 255);
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
        Schema::dropIfExists('review_videos');
    }
};
