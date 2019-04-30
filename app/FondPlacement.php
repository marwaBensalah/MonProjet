<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FondPlacement extends Model
{
    protected $fillable=['Fondateur','Denomination','FormeJuridique','Categorie','TypeOPVCM','MontantSouscrit','ValeurLiquidatif'
    ,'ValeurNominal','NombrePart','DateConstitution','Duree','Depositaire','Gestionnaire'];
    public function emetteur(){
        return $this->belongsTo('App\Emetteur');
    }
}
