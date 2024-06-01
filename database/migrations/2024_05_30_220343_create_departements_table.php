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
        Schema::connection('flshm')->create('departements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etablissement_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::connection('fssm')->create('departements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etablissement_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::connection('fsjes')->create('departements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etablissement_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('flshm')->dropIfExists('departements');
        Schema::connection('fsjes')->dropIfExists('departements');
        Schema::connection('fssm')->dropIfExists('departements');
    }
};
