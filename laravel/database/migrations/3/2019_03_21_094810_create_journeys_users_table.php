<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJourneysUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('journeys_users')){
            Schema::create('journeys_users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
            });
        }
        // 
        Schema::table('journeys_users', function (Blueprint $table) {
            $table->unsignedBigInteger('journey_id');
            $table->foreign('journey_id')->references('id')->on('journeys');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys_users');
    }
}
