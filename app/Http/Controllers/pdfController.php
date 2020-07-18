<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Etudiant;

class pdfController extends Controller
{
    public function export_pdf()
  {
    // Fetch all customers from database
    $data = Etudiant::get();
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('admin_pages/pages/icon-material',['data'=>$data]);
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('admin_pages/pages/icon-material.pdf');
  }
}
