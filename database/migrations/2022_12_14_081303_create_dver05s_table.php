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
        Schema::create('dver05s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kin_personal_id'); //personal_id
            $table->foreign('kin_personal_id')->references('kin_personal_id')->on('dver04s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dver05002');//k_phone_number
            $table->string('dver05003');//k_email
            $table->string('dver05004');//k_permanent_residence_country_name
            $table->string('dver05005');//k_permanent_residence_city_name
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
        Schema::dropIfExists('dver05s');
    }
};
