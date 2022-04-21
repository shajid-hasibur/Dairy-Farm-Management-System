<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function report(){
        return view('report');
    }

    public function generatePDF(){

    }
}
