<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obligation extends Model
{
    protected $fillable=['ISIN','Libelle','Quantite','Encours','Amortissement','TaucCoupon','InteretBrut',
    'AnnuiteUnitaireBrut'];
    public function empruntsemis(){
        return $this->belongsTo('App\EmpruntEmis');
    }
    public function empruntssouscrits(){
        return $this->belongsTo('App\EmpruntSouscrit');
    }
}