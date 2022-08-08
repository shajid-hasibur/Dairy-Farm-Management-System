<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\collection;
use App\Models\add_farmer;
use App\Models\payment;


class PaymentController extends Controller
{
    public function show()
    {
        $collections=collection::all();
        $farmers=add_farmer::all();
        $payment=payment::all();
        return view('payment',compact('collections','farmers','payment'));

    }
}
