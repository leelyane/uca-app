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
        Schema::connection('flshm')->create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('faculte')->default('FLSHM');
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('cni')->unique();
            $table->string('cne')->unique();
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('adresse');
            $table->string('ville');
            $table->string('photo')->nullable();
            $table->string('anneebac');
            $table->string('seriebac');
            // $table->foreignId('filiere_id')->nullable();
            $table->string('statut')->default('En attente');
            $table->string('valid')->nullable();
            $table->string('retire')->nullable();
            $table->timestamps();
        });

        Schema::connection('fsjes')->create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('faculte')->default('FSJES');
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('cni')->unique();
            $table->string('cne')->unique();
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('adresse');
            $table->string('ville');
            $table->string('photo')->nullable();
            $table->string('anneebac');
            $table->string('seriebac');
            $table->foreignId('filiere_id')->nullable();
            $table->string('statut')->default('En attente');
            $table->string('valid')->nullable();
            $table->string('retire')->nullable();
            $table->timestamps();
        });

        Schema::connection('fssm')->create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('faculte')->default('FSSM');
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('cni')->unique();
            $table->string('cne')->unique();
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('adresse');
            $table->string('ville');
            $table->string('photo')->nullable();
            $table->string('anneebac');
            $table->string('seriebac');
            $table->foreignId('filiere_id')->nullable();
            $table->string('statut')->default('En attente');
            $table->string('valid')->nullable();
            $table->string('retire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('flshm')->dropIfExists('etudiants');
        Schema::connection('fsjes')->dropIfExists('etudiants');
        Schema::connection('fssm')->dropIfExists('etudiants');
    }
};
