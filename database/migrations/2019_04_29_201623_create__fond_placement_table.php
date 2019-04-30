<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFondplacementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fondplacement', function (Blueprint $table) {
            $table->string('Fondateur');
            $table->string('Denomination');
            $table->primary('Denomination');
            $table->string('FormeJuridique');
            $table->string('Categorie');
            $table->string('TypeOPVCM');
            $table->float('MontantSouscrit');
            $table->integer('NombrePart');
            $table->float('ValeurNominal');
            $table->float('ValeurLiquidatif');
            $table->date('DateConstitution');
            $table->integer('Duree');
            $table->string('Depositaire');
            $table->string('Gestionnaire');
            $table->timestamps();
            $table->string('raison_social');
            $table->foreign('raison_social')
                  ->references('RaisonSocial')
                  ->on('Emetteur')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fondplacement');
    }
}
