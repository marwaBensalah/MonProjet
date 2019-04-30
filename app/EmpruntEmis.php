<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpruntEmis extends Model
{
    protected $fillable=['Compte','Denomination','Type','Nature','Categorie','MonatantEmis','ValeurNominal','DateJouissance'
    ,'NatureTaux','Maturite','TypeAmt','Remboursemet','SPEAD','Taux','TauxCoupon','PremiereEcheance','DerniereEcheance','Depositaire'
];
public function obligations(){
    return $this->hasMany('App\Obligation');
}
public function emetteur(){
    return $this->belongsTo('App\Emetteur');
}
}
