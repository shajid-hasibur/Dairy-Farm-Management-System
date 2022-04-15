<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\add_farmer;
use Illuminate\Support\Facades\File;

// public function __construct()
// {
//     //$this->middleware('auth');
// }
class AddFarmerController extends Controller
{
    public function addData(Request $req){
        $this->validate($req,[
            'serial_no' => 'required',
            'name' => 'required',
            'locality' => 'required',
            'farmers_account' => 'required',
            'farmers_phone' => 'required'
        ]);

        add_farmer::create($req->all());

        Toastr::success('Data Added successfully', 'Success');

        return redirect()->route('add_farmer.store')->with('Data stored successfully!');
    }
}
