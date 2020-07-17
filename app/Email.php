<?php

namespace email;

use Illuminate\Database\Eloquent\Model;

class Email extends Model 
{

    protected $table = 'email';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom','dateDeNaissance','dateDeNaissance','adresse','idemail'
        ,'idtuteur','idniveau','idannee','idcycle','email'
    ];

    public function mail_etudiant()
    {
        return $this->belongsTo('App\email', 'numMatricule');
    }

}