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
    Schema::create('patient_traitement', function (Blueprint $table) {
        $table->unsignedBigInteger('NumDoss');
        $table->unsignedBigInteger('Num_Traitement');
        $table->timestamps();

        // Check if the 'patients' table exists before adding the foreign key
        if (Schema::hasTable('patients')) {
            $table->foreign('NumDoss')->references('NumDoss')->on('patients')->onDelete('cascade');
        }

        $table->foreign('Num_Traitement')->references('Num_Traitement')->on('traitements')->onDelete('cascade');
    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_traitement');
    }
};
