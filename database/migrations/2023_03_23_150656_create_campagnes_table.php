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
        Schema::create('campagnes', function (Blueprint $table) {
            $table->id();
            $table->string('name',250);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('resp_comte',220);
            $table->boolean('saisie_libre');
            $table->boolean('heure_nuit');
            $table->string('type_planning',220);
            $table->string('code_analy',50);
            $table->date('date_up');
            $table->string('up_user',220);
            $table->string('etat', 220);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campagne');
    }
};
