<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Filiere extends Model
{
    public function faculte(){
        return $this->belongsTo("App\Faculte", 'faculte_id');
    }

    protected $fillable=['nom', 'faculte_id'];

}
