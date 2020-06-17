<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('profile_pic')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable()->unique();
            $table->string('country')->nullable()->unique();
            $table->string('website')->nullable();
            $table->string('education')->nullable();
            $table->boolean('education-current')->nullable();
            $table->string('education-country')->nullable();
            $table->string('highest-degree')->nullable();
            $table->string('education-university')->nullable();

            $table->string('work')->nullable();
            $table->boolean('work-current')->nullable();
            $table->string('company')->nullable();
            $table->string('work-country')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('nationality')->nullable();
            $table->text('about')->nullable();
            $table->string('relationship-status')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('user_details');
    }
}
