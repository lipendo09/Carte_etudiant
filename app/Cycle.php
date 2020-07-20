<?php

namespace Cycle;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model 
{

    protected $table = 'cycle';
    public $timestamps = false;
    

    public function cycle()
    {
        return $this->hasMany(Etudiant::class, 'idcycle', 'numMatricule');
    }

    

}