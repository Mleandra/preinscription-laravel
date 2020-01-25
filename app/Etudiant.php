<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public  function diplome(){
        return $this->belongsTo("App\Diplome");
    }
    public  function faculte(){
        return $this->belongsTo("App\Faculte");
    }
    public  function choix_1(){
        return $this->belongsTo("App\Filiere", "choix-1");
    }
    public  function choix_2(){
         return $this->belongsTo("App\Filiere","choix-2");
    }
    public  function  choix_3(){
        return $this->hasOne("App\Filiere","choix-3");
    }
    public  function  niveau(){
        return $this->belongsTo("App\Niveau");
    }
    public  function  region(){
        return $this->belongsTo("App\Region");
    }
    public  function  pays(){
        return $this->belongsTo("App\Pays");
    }
    //
}
