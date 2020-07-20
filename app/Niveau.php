<?php

namespace niveau;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model 
{

    protected $table = 'niveauetude';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','dateDeNaissance','adresse','idemail'
        ,'idtuteur','idniveau','idannee','idcycle','email'
    ];

    public function niveau_etudiant()
    {
        return $this->hasMany('App\niveau', 'numMatricule');
    }

}