<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTitleAndDescriptionColumnOnBannerSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_slider', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
        });

        Schema::table('banner_slider', function (Blueprint $table) {
            $table->string('title', 225)->nullable()->default(NULL);
            $table->text('description')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
