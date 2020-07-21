<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\SendMail;
use App\Etudiant;


class EmailController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('admin_pages/pages/email');
  }

  public function send(Request $request)
  {
    $data= array(
    'nom'=> $request->nom,
    'message'=> $request->message,
    'email'=>$request->email
);
    Mail::to('sidikiouedraogo2000@gmail.com')->send(new Sendmail($data));
    return back();
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('admin_pages/pages/email');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  // public function store(EmailRequest $request)
  // {
  //   Mail::to('administrateur@moi.com')
  //   ->send(new SendMail ($request->except('_token')));
  //   return view('admin_pages/pages/email');
  // }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
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
   
    return view('admin_pages/pages/email', compact('etudiant'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>