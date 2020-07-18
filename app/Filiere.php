<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model 
{

    protected $table = 'filiere';
    public $timestamps = false;
    protected $primaryKey = 'idfiliere';

    public function filiere_etudiant()
    {
        return $this->hasMany(Filiere::class,'idfiliere', 'numMatricule'
        );
    }

}