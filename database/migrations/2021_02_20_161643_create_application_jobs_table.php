<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('career_id');
            $table->string('name', 225);
            $table->string('email', 225);
            $table->enum('gender', ['male', 'female']);
            $table->string('phone', 20)->nullable();
            $table->text('message')->nullable();
            $table->string('resume_location')->nullable();
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
        Schema::dropIfExists('application_jobs');
    }
}
