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
        Schema::create('dver03s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dis_personal_id'); //personal_id
            $table->foreign('dis_personal_id')->references('dis_personal_id')->on('dver01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dver03002');//er_national_id
            $table->string('dver03003');//er_passport_number
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
        Schema::dropIfExists('dver03s');
    }
};
