<?php

namespace App\Http\Controllers;

use App\Models\add_farmer;
use Illuminate\Http\Request;

class UpdateDataController extends Controller
{
    public function showData($id){

        $data = add_farmer::find($id);
        return view('update_farmer',['data'=>$data]);
    }

    public function update(Request $request){

        $data = add_farmer::find($request->id);

        $data->serial_no=$request->input('serial_no');
        $data->name=$request->input('name');
        $data->locality=$request->input('locality');
        $data->farmers_account=$request->input('farmers_account');
        $data->farmers_phone=$request->input('farmers_phone');

        $data->update();

        return redirect('farmer-list');

    }
}
