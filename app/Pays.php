<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    public  function  regions(){
        return $this->hasMany("App\Region");
    }
}
