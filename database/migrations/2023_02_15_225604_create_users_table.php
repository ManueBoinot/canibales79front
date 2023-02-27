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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->default(2)->constrained()->cascadeOnUpdate();
            $table->foreignId('bureau_membre_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignId('categorie_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignId('licence_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naiss');
            $table->string('adr_ligne_1');
            $table->string('adr_ligne_2')->nullable();
            $table->string('code_postal');
            $table->string('commune');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('certif_medic')->nullable();
            $table->string('autoris_parent')->nullable();
            $table->string('att_resp_civ')->nullable();
            $table->timestamp('email_verified_at')->default(now());
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
};
