<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class jointableController extends Controller
{
    function index(){

        $data= DB::table('etudiant')
        ->join('email','email.idemail','=','etudiant.idemail')
        ->join('tuteur','tuteur.idtuteur','=','etudiant.idtuteur')
        ->join('cycle','cycle.idcycle','=','etudiant.idcycle')
        ->join('niveauetude','niveauetude.idniveau','=','etudiant.idniveau')
        ->join('annee-academique','annee-academique.idannee','=','etudiant.idannee')
        ->join('filiere','filiere.idfiliere','=','etudiant.idfiliere')
        ->join('carte','carte.idcarte','=','etudiant.idcarte')
        ->select('tuteur.numTele','cycle.nom','niveauetude.niveau','email.email',
        'annee-academique.annee','filiere.nom','carte.numeroCarte','etudiant.nom')
        ->get();
        return view('admin_pages/pages/table-basic',compact('data'));

    }
}
