<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function innerJoin(){
        // $users = DB::table('add_farmers')
        // ->leftJoin('payments','add_farmers.id','=','payments.id')
        // ->leftJoin('collections','payments.id','=','collections.id')
        // ->select('payments.id','add_farmers.name','collections.farmer_id','collections.milk_amount',
        // 'collections.price','collections.date','payments.status')
        // ->get();
        // // return view('payment',compact('users'));
        // dd($users);
        // // $users = DB::table('collections')->get();
        // // dd($users);


        $users = DB::table('add_farmers')
        ->rightJoin('collections','add_farmers.id','=','collections.farmer_id')
        // ->select('collections.status')
        ->get();
        return view('payment',compact('users'));

    }

    // public function show(){
    //     return view('payment-create');
    // }

    

}
