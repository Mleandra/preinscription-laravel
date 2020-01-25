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
        return $this->belongsTo("App\Filiere", "choix_1");
    }
    public  function choix_2(){
         return $this->belongsTo("App\Filiere","choix_2");
    }
    public  function  choix_3(){
        return $this->belongsTo("App\Filiere","choix_3");
    }
    public  function  niveau(){
        return $this->belongsTo("App\Niveau");
    }
    public  function  region(){
        return $this->belongsTo("App\Region");
    }

}
