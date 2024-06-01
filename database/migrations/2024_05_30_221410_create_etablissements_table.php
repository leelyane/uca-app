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
        Schema::connection('flshm')->create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ville_id');
            $table->string('name');
            $table->string('adresse')->nullable();
            $table->timestamps();
        });

        Schema::connection('fssm')->create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ville_id');
            $table->string('name');
            $table->string('adresse')->nullable();
            $table->timestamps();
        });

        Schema::connection('fsjes')->create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ville_id');
            $table->string('name');
            $table->string('adresse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('flshm')->dropIfExists('etablissements');
        Schema::connection('fsjes')->dropIfExists('etablissements');
        Schema::connection('fssm')->dropIfExists('etablissements');
    }
};
