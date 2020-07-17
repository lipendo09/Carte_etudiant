<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class indexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      return view('admin_pages/pages/edit');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      return view('admin_pages/pages/table-basic');
    }
  
    /**
     * get a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $etudiant = new Etudiant([
        'nom' => $request->get('nom'),
        'prenom' => $request->get('prenom'),
        'dateDeNaissance' => $request->get('dateDeNaissance'),
        'adresse' => $request->get('adresse'),
        'email' => $request->get('email'),
        'photo' => $request->photo->store('public/images'),
        'idcycle' => $request->get('idcycle'),
        'idfiliere' => $request->get('idfiliere'),
        'idannee' => $request->get('idannee'),
        'idniveau' => $request->get('idniveau'),
        
    ]);
    $etudiant->save();
    return redirect('admin_pages/pages/table-basic');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Etudiant $etudiants)
    {
        return view('admin_pages/pages/table-basic', [
            'etudiants' => $etudiants
        ]);
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      
      $etudiant = Etudiant::find($id);
     
      return view('admin_pages/pages/edit', compact('etudiant'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
      $etudiant = Etudiant::find($id);
      
          $etudiant->nom =  $request->get('nom');
          $etudiant->prenom = $request->get('prenom');
          $etudiant->dateDeNaissance = $request->get('dateDeNaissance');
          $etudiant->adresse = $request->get('adresse');
          $etudiant->email = $request->get('email');
          $etudiant->photo = $request->store('photo');
          $etudiant->idcycle = $request->get('idcycle');
          $etudiant->idniveau = $request->get('idniveau');
          $etudiant->idannee = $request->get('idannee');
          $etudiant->idfiliere = $request->get('idfiliere');
          $etudiant->save();
  
          return redirect('admin_pages/pages/edit');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      Etudiant::where('numMatricule',$id)->delete();
     
      return redirect('/admin_pages/pages/table-basic');
    }
    
  }
