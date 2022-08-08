<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\delivery;
use App\Models\employee;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Carbon\Carbon;

class DeliveryController extends Controller
{
    public function show(){
        return view('delivery');
    }

    public function fetch(){
        $employee=employee::all();
        $login_user = auth()->user();
        $users=delivery::all();
        $data=delivery::sum('milk_amount');
        $data2=delivery::sum('price');
        foreach($users as $item){
            $from=new DateTime($item->created_at);
            $to=new DateTime(Carbon::now());
            $days= $from->diff($to);
            $item->update([
                'days_passed'=>$days->days

            ]);
        }
        return view('delivery',compact('users','login_user','employee','data','data2'));
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

    public function assign($id)
    {
        $delivery=delivery::find($id);
        $employees=employee::all();
        
        return view('assign-delivery',compact('employees','delivery'));
    }

    public function store(Request $request,$id){
        $delivery=delivery::find($id);
        $delivery->update([

            'employee_id'=>$request->employee_id,
           
        ]);
        Toastr::success('Employee Assigned Successfully');

        return redirect()->route('fetch.delivery');
    }


    public function statusDelivered($id)
    {
        $status=delivery::find($id)->update([
            'status'=>'Delivered'
        ]);
        return redirect()->back();
    }
    public function statusDamaged($id)
    {
        $status=delivery::find($id)->update([
            'status'=>'Damaged'
        ]);
        return redirect()->back();

    }
    public function statusRejected($id)
    {
        $status=delivery::find($id)->update([
            'status'=>'Rejected'
        ]);
        return redirect()->back();

    }

} 