<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;
use App\Models\employee;

class OrderController extends Controller
{
    public function show($id){

        $data = delivery::find($id);
        $employee = employee::all();
        $users = delivery::all();
        return view('create-order',compact('data','employee','users'));
    }

    public function order(Request $request){

        $data = delivery::find($request->id);
        $data->company_name=$request->input('company_name');
        $data->id=$request->input('id');
        $data->address=$request->input('address');
        $data->milk_amount=$request->input('milk_amount');
        $data->damage_amount=$request->input('damage_amount');
        $data->delivery_date=$request->input('delivery_date');
        $data->update();
        return redirect('delivery');
    }

    public function fetch(){

        $users = delivery::paginate(5);
        return view('view_order',compact('users'));
    }

    public function damageShow($id){

        $data = delivery::find($id);
        $users = delivery::all();
        return view('damage_delivery',compact('data','users'));

    }

    public function damage(Request $req){

        
        $data = delivery::find($req->id);
        $data->company_name=$req->input('company_name');
        $data->id=$req->input('id');
        $data->address=$req->input('address');
        $data->milk_amount=$req->input('milk_amount');
        $data->price=$req->input('price');
        $data->status=$req->input('status');
        $data->update();
        return redirect('delivery');

    }
}
