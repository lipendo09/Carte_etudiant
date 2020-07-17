<?php

namespace filiere;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model 
{

    protected $table = 'filiere';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','dateDeNaissance','adresse','idemail'
        ,'idtuteur','idniveau','idannee','idcycle','email','photo','idfiliere'
    ];

    public function filiere_etudiant()
    {
        return $this->hasMany('App\filiere', 'numMatricule',
        'idniveau','idannee','idcycle','email','photo');
    }

}