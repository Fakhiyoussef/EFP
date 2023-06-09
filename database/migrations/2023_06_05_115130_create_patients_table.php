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
            Schema::create('patients', function (Blueprint $table) {
                $table->bigIncrements ('NumDoss');
                $table->string('PrenomPat');
                $table->string('NomPat');
                $table->string('Sexe');
                $table->date('DateNaiss');
                $table->string('LieuNaiss');
                $table->integer('Age');
                $table->string('Etat_civil');
                $table->string('AddressePat');
                $table->string('Mutuelle');
                $table->string('Profession');
                $table->string('Email');
                $table->string('Tel');
                $table->text('Observations');                        
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('patients');
        }
    };
