<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model 
{

    protected $table = 'carte';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','dateDeNaissance','adresse','idemail'
        ,'idtuteur','idniveau','idannee','idcycle','email'
    ];

    public function carte_etudiant()
    {
        return $this->belongsTo('App\carte', 'numMatricule');
    }

}