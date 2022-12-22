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
        Schema::create('dver02s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dis_personal_id'); //personal_id
            $table->foreign('dis_personal_id')->references('dis_personal_id')->on('dver01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dver02002');//phone_number
            $table->string('dver02003');//email
            $table->string('dver02004');//permanent_residence_country_name
            $table->string('dver02005');//permanent_residence_city_name

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
        Schema::dropIfExists('dver02s');
    }
};
