<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmetteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emetteur', function (Blueprint $table) {
            $table->string('RaisonSocial');
            $table->primary('RaisonSocial');
            $table->string('Intermediaire1');
            $table->string('Intermediaire2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emetteur');
    }
}

