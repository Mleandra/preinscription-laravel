<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function  pays(){
        return $this->belongsTo("App\Pays");

    }
}
