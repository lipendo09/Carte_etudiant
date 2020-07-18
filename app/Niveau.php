<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model 
{

    protected $table = 'niveauetude';
    public $timestamps = false;
    protected $primaryKey = 'idniveau';

    public function niveau_etudiant()
    {
        return $this->hasMany(Niveau::class,'idniveau' ,'numMatricule');
    }

}