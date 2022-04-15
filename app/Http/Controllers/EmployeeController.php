<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Brian2694\Toastr\Facades\Toastr;

class EmployeeController extends Controller
{
    public function show(){
        return view('employee');
    }

    //fetch data from database

    public function index(){

        $users=employee::all();
        return view('employee',compact('users'));
    }

    //delete data

    public function destroy($id){

            employee::find($id)->delete();
            return redirect()->back();
    }

    public function addData(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            
        ]);

        employee::create($req->all());

        Toastr::success('Data Added successfully', 'Success');

        return redirect()->route('add_employee.store')->with('Data stored successfully!');
    }

    public function showData($id){

        $data = employee::find($id);
        return view('update_employee',['data'=>$data]);
    }

    public function update(Request $request){

        $data = employee::find($request->id);

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->role=$request->input('role');
        
        $data->update();

        return redirect('employees');

    }


}
