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
        Schema::create('kitobs', function (Blueprint $table) {
            $table->id();
            $table->integer('local_id');
            $table->integer('sarlavha_id');
            $table->integer('muallif_id');
            $table->integer('yili');
            $table->integer('kitob_turi_id');
            $table->integer('javon_id');
            $table->integer('nashriyot_id');
            $table->text('izoh')->default('Izohlar');
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
        Schema::dropIfExists('kitobs');
    }
};
