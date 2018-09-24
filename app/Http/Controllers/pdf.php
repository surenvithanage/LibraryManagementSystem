<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class pdf extends Controller
{
    public function index(){
        return view('PdfDemo');
    }

    public function samplePDF(){
        Fpdf::AddPage();
        Fpdf::SetFont('Courier', 'B', 18);
        Fpdf::Output('SamplePDF.pdf');

    }
}
