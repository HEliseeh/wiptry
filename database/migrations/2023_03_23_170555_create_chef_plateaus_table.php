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
        Schema::create('chef_plateauses', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('prenom',50);
            $table->string('matricule',100);
            $table->string('type',20);
            $table->string('etat',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_plateaus');
    }
};
