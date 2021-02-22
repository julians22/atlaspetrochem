<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_slider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 225)->nullable();
            $table->text('description')->nullable();
            $table->string('image_location', 225)->nullable();
            $table->boolean('active')->default('1');
            $table->softDeletes();
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
        Schema::dropIfExists('banner_slider');
    }
}
