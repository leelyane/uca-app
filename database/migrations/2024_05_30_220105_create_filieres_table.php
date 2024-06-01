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
        Schema::connection('flshm')->create('filieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departement_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::connection('fsjes')->create('filieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departement_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::connection('fssm')->create('filieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departement_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('flshm')->dropIfExists('filieres');
        Schema::connection('fsjes')->dropIfExists('filieres');
        Schema::connection('fssm')->dropIfExists('filieres');
    }
};
