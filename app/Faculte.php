<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    public  function  filieres(){
        return $this->hasMany("App\Filiere");

    }
    protected $fillable=['nom'];
    //
}
