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
        Schema::create('circuits', function (Blueprint $table) {
            $table->id();
            $table->enum('difficulte', ['Tous niveaux', 'Intermédiaire', 'Élevée']);
            $table->string('code_postal');
            $table->string('commune');
            $table->string('gps_depart');
            $table->float('distance');
            $table->string('denivele')->nullable();
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
        Schema::dropIfExists('circuits');
    }
};
