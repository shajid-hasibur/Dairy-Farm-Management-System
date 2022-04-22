<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function report(){
        return view('report');
    }

    public function generatePDF(){

        $users = delivery::all();

        // $data = [
        //     'title' => 'Welcome to pdf page',
        //     'date'  => date('m/d/y'),
        //     'users' => $users
        // ];
        
        $pdf = PDF::loadView('delivery',compact('users'));
        return $pdf->download('delivery.pdf');

    }
}
