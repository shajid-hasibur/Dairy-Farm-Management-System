<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collection;
use App\Models\add_farmer;
use Brian2694\Toastr\Facades\Toastr;

class CollectionController extends Controller
{
    public function index(){

        $collections=collection::all();
        return view('collection-list',compact('collections'));
    }
    public function create(){

        $farmers=add_farmer::all();
        return view('collection-create',compact('farmers'));
    }
    public function store(Request $request){
        collection::create([

            'farmer_id'=>$request->farmer_id,
            'milk_amount'=>$request->amount,
            'price'=>$request->price,
            'date'=>$request->date,
            'status'=>$request->status
            

        ]);
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
}
