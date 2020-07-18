<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model 
{

    protected $table = 'etudiant';
    protected $primaryKey = 'numMatricule';
    public $timestamps = true;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','adresse','idfiliere'
        ,'idtuteur','idniveau','idannee','idcycle','email','photo',
    ];

    public function etudiant_cycle()
    {
        return $this->belongsTo(Cycle::class, 'idcycle', 'numMatricule');
    }

    public function etudiant_tuteur()
    {
        return $this->belongsTo('App\Etudiant', 'idcycle' ,'idniveau','idannee','idfiliere','idtuteur');
    }

    public function etudiant_niveau()
    {
        return $this->belongsTo(Niveau::class,'idniveau', 'numMatricule');
    }

    public function etudiant_filiere()
    {
        return $this->belongsTo(Filiere::class,'idfiliere', 'numMatricule');
    }

    public function etudiant_email()
    {
        return $this->hasOne('App\Etudiant', 'idcycle' ,'idniveau','idannee','idfiliere','idtuteur');
    }

    public function etudiant_annee()
    {
        return $this->belongsTo('App\Etudiant','idcycle' ,'idniveau','idannee','idfiliere','idtuteur');
    }

    public function etudiant_carte()
    {
        return $this->hasOne('App\Etudiant', 'idcarte','idcycle' ,'idniveau','idannee','idfiliere','idtuteur');
    }

}