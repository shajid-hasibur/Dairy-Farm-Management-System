<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\add_farmer;
use Illuminate\Support\Facades\DB;

class FetchDataController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index(){
        // $users = DB::select('select serial_no, id, name, locality, farmers_account, farmers_phone  from add_farmers');
        // return view('farmer-list',['users'=>$users]);
        $users=add_farmer::all();
        $data = add_farmer::count('id');
        return view('farmer-list',compact('users','data'));
    }
}
