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
        Schema::create('user_startups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nom du porteur');
            $table->string('Email')->unique();
            $table->string('Pays_origine');
            $table->string('Ville_residence');
            $table->string('Prenom');
            $table->string('Telephone');
            $table->binary('Joindre_la_presentation_du_projet');
            $table->binary('Pacourir');
            $table->string('Je_suis_un_homme');
            $table->string('Je_suis_une_femme');



            







        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_startups');
    }
};
