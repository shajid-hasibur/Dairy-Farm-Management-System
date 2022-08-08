<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collection;
use App\Models\add_farmer;
use App\Models\payment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\View;

class CollectionController extends Controller
{
    public function index(){

        $collections=collection::all();
        $sum = collection::sum('milk_amount');
        $totalPrice = collection::sum('price');
        return view('collection-list',compact('collections','sum','totalPrice'));
    }
    public function create(){

        $farmers=add_farmer::all();
        return view('collection-create',compact('farmers'));
    }

    public function store(Request $request){
        $collection=collection::create([

            'farmer_id'=>$request->farmer_id,
            'milk_amount'=>$request->amount,
            'price'=>$request->price,  
            'date'=>$request->date,
            'status'=>$request->status
            
        ]);
        $request_farmer=$request->farmer_id;
        $regular_farmer=add_farmer::where('id',$request_farmer)->first();
        // dd($regular_farmer);
       
        if( $regular_farmer->farmer_type=='Regular Farmer'){
        payment::create([
            'collection_id'=>$collection->id,
            'farmer_id'=>$collection->farmer_id,
            'milk_amount'=>$collection->milk_amount,
            'price'=>$collection->price,
            'total_price'=>$collection->price+$collection->price*0.5,
            'status'=>$collection->status,

        ]);
    }
    else{
        payment::create([
            'collection_id'=>$collection->id,
            'farmer_id'=>$collection->farmer_id,
            'milk_amount'=>$collection->milk_amount,
            'price'=>$collection->price,
            'total_price'=>$collection->price,
            'status'=>$collection->status,

        ]);

    }
        Toastr::success('Collection Added Successfully');

        return redirect()->route('collection.list');
    }



    public function destroy($id){

        collection::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $collection=collection::find($id);
        $farmer=add_farmer::all();
        return view('update-collection',compact('collection','farmer'));
    }
    public function update(Request $request, $id)
    {
        $collection=collection::find($id);
        $collection->update([
            'farmer_id'=>$request->farmer_id,
            'milk_amount'=>$request->amount,
            'price'=>$request->price,
            'date'=>$request->date,
            'status'=>$request->status

        ]);
        Toastr::success('Collection Updated Successfully');
        return redirect()->route('collection.list');
    }

    // public function iubat(){

    //     $sum = collection::sum('milk_amount');
        
    //     // return view('collection-list',['sum'=>$sum]);
    //     // return view('collection-list')->with($sum);
    //     return view('collection-list',compact('sum'));
        
    //     // return View::make('collection-list', ['sum' => $sum]);


    // }
}
