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
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('NumPaiement');
            $table->float('Apayer');
            $table->float('Avance');
            $table->float('Reste');
            $table->float('Montant');
            $table->date('DatePaiement');
            $table->enum('Statut', ['en cours', 'payé', 'annulé']);
            $table->unsignedBigInteger('NumDoss');
            $table->foreign('NumDoss')->references('NumDoss')->on('patients'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
