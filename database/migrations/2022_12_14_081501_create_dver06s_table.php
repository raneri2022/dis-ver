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
        Schema::create('dver06s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kin_personal_id'); //personal_id
            $table->foreign('kin_personal_id')->references('kin_personal_id')->on('dver04s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dver06002');//k_er_national_id
            $table->string('dver06003');//k_er_passport_number
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
        Schema::dropIfExists('dver06s');
    }
};
