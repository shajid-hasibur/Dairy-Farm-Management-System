<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\add_farmer;
use App\Models\payment;
use App\Models\collection;
use Illuminate\Support\Facades\DB;


class DeleteController extends Controller
{
        public function destroy($id) {
        // add_farmer::find($id)->delete();
        $farmer_id = add_farmer::find($id);
        // payment::where('farmer_id',$farmer_id->id)->delete();
        // collection::where('farmer_id',$farmer_id->id)->delete();
        $farmer_id->delete();
        return redirect()->back();
    }
}
