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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('desinazione', 32);
            $table->string('partrenza', 32);
            $table->string('trasporto', 32);
            $table->string('hotel', 16);
            $table->string('visite_incluse', 62) -> nullable(true);
            $table->decimal('prezzo', $scale = 2) -> unsigned();
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
        Schema::dropIfExists('travel');
    }
};
