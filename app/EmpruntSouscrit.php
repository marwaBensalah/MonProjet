<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpruntSouscrit extends Model
{
    protected $fillable=['Compte','Denomination','Type','Nature','Categorie','MonatantSouscrit','ValeurNominal','DateJouissance'
    ,'NatureTaux','Maturite','TypeAmt','Remboursemet','SPEAD','Taux','TauxCoupon','PremiereEcheance','DerniereEcheance','Depositaire'];
    public function obligations(){
        return $this->hasMany('App\Obligation');
    }
}
