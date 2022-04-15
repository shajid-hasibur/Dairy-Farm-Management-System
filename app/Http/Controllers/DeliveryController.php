<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\delivery;
use App\Models\Users;

class DeliveryController extends Controller
{
    public function show(){
        return view('delivery');
    }

    public function fetch(){

        $login_user = auth()->user();
        $users=delivery::all();
        return view('delivery',compact('users','login_user'));
    }

    public function index(){
        return view('add-delivery');
    }

    public function add(Request $req){
        $this->validate($req,[
            'company_name' => 'required',
            'address' => 'required',
            'milk_amount' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);

        delivery::create($req->all());

        Toastr::success('Data Added successfully', 'Success');

        return redirect()->route('add_delivery')->with('Data stored successfully!');
    }

    public function showdata($id){
        $data = delivery::find($id);
        return view('update_delivery',['data'=>$data]);
    }

    public function update(Request $request){

        $data = delivery::find($request->id);

        $data->company_name=$request->input('company_name');
        $data->address=$request->input('address');
        $data->milk_amount=$request->input('milk_amount');
        $data->price=$request->input('price');
        $data->status=$request->input('status');
        
        $data->update();

        return redirect('delivery');

    }

    public function destroy($id) {
        delivery::find($id)->delete();
        return redirect()->back();
    }
}
