<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model 
{

    protected $table = 'cycle';
    public $timestamps = false;
    protected $primaryKey = 'idcycle';
    

    public function cycle()
    {
        return $this->hasMany(Etudiant::class, 'idcycle', 'numMatricule');
    }

    

}