<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObligationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obligation', function (Blueprint $table) {
            $table->string('ISIN');
            $table->primary('ISIN');
            $table->string('Libelle');
            $table->integer('Quantite');
            $table->float('Encours');
            $table->float('Amortissement');
            $table->float('TauxCoupon');
            $table->float('InteretBrut');
            $table->float('AnnuiteUnitaireBrut');
            $table->timestamps();
            $table->string('Compte_e');
            $table->foreign('Compte_e')
                  ->references('Compte')
                  ->on('Emprunt_Emis')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->string('Compte_s');
            $table->foreign('Compte_s')
                  ->references('Compte')
                  ->on('Emprunt_Souscrit')
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
        Schema::dropIfExists('obligation');
    }
}
