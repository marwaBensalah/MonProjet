<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpruntEmisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunt_emis', function (Blueprint $table) {
            $table->string('Compte');
            $table->primary('Compte');
            $table->string('Denomination');
            $table->string('Type');
            $table->string('Nature');
            $table->string('Categorie');
            $table->float('MontantEmis');
            $table->float('ValeurNominal');
            $table->Date('DateJouissance');
            $table->string('NatureTaux');
            $table->integer('Maturite');
            $table->string('TypeAmt');
            $table->string('Remboursemet');
            $table->float('SPEAD');
            $table->float('Taux');
            $table->float('TauxCoupon');
            $table->Date('PremiereEcheance');
            $table->Date('DerniereEcheance');
            $table->string('Depositaire');
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
        Schema::dropIfExists('emprunt_emis');
    }
}