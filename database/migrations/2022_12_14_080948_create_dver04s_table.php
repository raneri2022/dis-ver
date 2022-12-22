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
        Schema::create('dver04s', function (Blueprint $table) {
            $table->bigIncrements('kin_personal_id');
            $table->foreignId('dis_personal_id'); //personal_id
            $table->foreign('dis_personal_id')->references('dis_personal_id')->on('dver01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dver04002');//k_f_name
            $table->string('dver04003');//k_m_name
            $table->string('dver04004');//k_l_name
            $table->string('dver04005');//k_relationship
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
        Schema::dropIfExists('dver04s');
    }
};
