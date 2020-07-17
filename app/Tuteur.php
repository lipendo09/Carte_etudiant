<?php

namespace Tuteur;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model 
{

    protected $table = 'tuteur';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','dateDeNaissance','adresse','idemail'
        ,'idtuteur','idniveau','idannee','idcycle','email'
    ];

    public function tuteur()
    {
        return $this->hasMany('App\tuteur', 'numMatricule');
    }

}