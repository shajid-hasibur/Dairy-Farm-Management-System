<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;
use App\Models\collection;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function report($id){
        $user = delivery::find($id);
        return view('delivery-report',compact('user'));
    }
}
