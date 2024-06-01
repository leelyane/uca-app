<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('fssm')->create('declined_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('cni');
            $table->string('cne');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('adresse');
            $table->string('ville');
            $table->string('photo')->nullable();
            $table->string('anneebac');
            $table->string('seriebac');
            $table->foreignId('filiere_id')->nullable();
            $table->timestamps();
        });

        Schema::connection('flshm')->create('declined_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('cni');
            $table->string('cne');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('adresse');
            $table->string('ville');
            $table->string('photo')->nullable();
            $table->string('anneebac');
            $table->string('seriebac');
            $table->foreignId('filiere_id')->nullable();
            $table->timestamps();
        });

        Schema::connection('fsjes')->create('declined_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('cni');
            $table->string('cne');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('adresse');
            $table->string('ville');
            $table->string('photo')->nullable();
            $table->string('anneebac');
            $table->string('seriebac');
            $table->foreignId('filiere_id')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('flshm')->dropIfExists('declined_etudiants');
        Schema::connection('fsjes')->dropIfExists('declined_etudiants');
        Schema::connection('fssm')->dropIfExists('declined_etudiants');
    }
};
