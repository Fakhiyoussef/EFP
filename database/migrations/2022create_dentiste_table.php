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
        Schema::create('dentiste', function (Blueprint $table) {
            $table->bigIncrements('idDent');
            $table->string('NomDent');
            $table->string('PrenomDent');
            $table->string('TelDent');
            $table->string('EmailDent')->unique();
            $table->string('Password');
            $table->string('Ville');
            $table->string('Adresse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentiste');
    }
};
