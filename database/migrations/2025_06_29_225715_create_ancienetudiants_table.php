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
        Schema::create('ancien_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100); // 50 peut être trop court pour certains noms
            $table->date('date_naissance');
            $table->string('lieu_naissance', 100);
            $table->string('email', 100)->unique();
            $table->string('telephone', 20)->nullable();
            $table->unsignedSmallInteger('annee_entree');
            $table->string('motdepasse')->nullable(); // Assurez-vous que ce champ est bien géré pour la sécurité
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ancien_etudiants');
    }
};
