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
    public  function choix1(){
        return $this->belongsTo("App\Filiere", "choix_1");
    }
    public  function choix2(){
         return $this->belongsTo("App\Filiere","choix_2");
    }
    public  function  choix3(){
        return $this->belongsTo("App\Filiere","choix_3");
    }
    public  function  niveau(){
        return $this->belongsTo("App\Niveau");
    }
    public  function  region(){
        return $this->belongsTo("App\Region");
    }
    public  function  payement(){
        return $this->belongsTo("App\Payement",'paiement_id');
    }

    protected $fillable=['nom', 'prenom','date_naissance','lieu_naissance','langue','etat_civil','adresse','telephone','nom_pere','profession_pere','nom_mere','profession_mere','nom_urgence','tel_urgence','ville_urgence','annee_diplome','exam_nomber','info_jury'
        ,'moyenne' ,'date_delivrence','choix_1','choix_2','choix_3','region_id','niveau_id','diplome_id','sexe','transaction','paiement_id'
    ];

}
