<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emetteur extends Model
{
    protected $fillable=['RaisonSocial','Intermediaire1','Intermediaire2'];
    public function empruntE(){
        return $this->hasMany('App\EmpruntEmis');
    }
}