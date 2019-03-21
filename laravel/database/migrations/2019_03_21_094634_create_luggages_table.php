<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuggagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('luggages')){
            Schema::create('luggages', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('description', '100')->nullable;
                $table->timestamps();
            });
        }
        // 
        Schema::table('luggages', function (Blueprint $table) {
            $table->unsignedBigInteger('luggages_type_id');
            $table->foreign('luggages_type_id')->references('id')->on('luggages_type');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('journeys_users_id')->nullable();
            $table->foreign('journeys_users_id')->references('id')->on('journeys_users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luggages');
    }
}
