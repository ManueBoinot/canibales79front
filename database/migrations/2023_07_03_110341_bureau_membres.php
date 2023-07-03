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
        Schema::create('bureau_membres', function (Blueprint $table) {
            $table->id();
            $table->enum('statut', ['Président(e)', 'Trésorier(e)', 'Trésorier(e)-adjoint(e)', 'Secrétaire', 'Secrétaire-adjoint(e)'])->unique();
            $table->string('prenom')->default('prenom');
            $table->string('image')->default('default.jpg');
            $table->rememberToken();
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
        Schema::dropIfExists('bureau_membres');
    }
};
