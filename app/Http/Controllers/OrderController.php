<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;

class OrderController extends Controller
{
    public function show($id){

        $data = delivery::find($id);
        return view('create-order',['data'=>$data]);
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
}
