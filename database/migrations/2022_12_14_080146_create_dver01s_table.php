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
        Schema::create('dver01s', function (Blueprint $table) {
            $table->bigIncrements('dis_personal_id');
            $table->string('f_name_personal');
            $table->string('m_name_personal');
            $table->string('l_name_personal');
            $table->string('dob');
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
        Schema::dropIfExists('dver01s');
    }
};
