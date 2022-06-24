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
        Schema::create('foydalanuvchis', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('familya');
            $table->string('otasining_ismi');
            $table->string('telefon');
            $table->boolean('jinsi');
            $table->integer('guruh_id');
            $table->integer('viloyat_id');
            $table->integer('tuman_id');
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
        Schema::dropIfExists('foydalanuvchis');
    }
};
