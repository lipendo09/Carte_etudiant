<?php

namespace annee;

use Illuminate\Database\Eloquent\Model;

class Annee extends Model 
{

    protected $table = 'annee-academique';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','dateDeNaissance','adresse','idemail'
        ,'idtuteur','idniveau','idannee','idcycle','email'
    ];

    public function annee_etudiant()
    {
        return $this->hasMany('App\annee', 'numMatricule');
    }

}