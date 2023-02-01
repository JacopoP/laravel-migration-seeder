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
        Schema::create('trains', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('codice');
            $table->string('azienda');
            $table->integer('capienza_massima');
            $table->boolean('pronto');
            $table->string('prossima_tratta');
            $table->date('inizio_servizio');
            $table->date('ultima_revisione');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trains');
    }
};
