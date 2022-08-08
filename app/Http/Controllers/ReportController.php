<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;
use App\Models\employee;
use App\Models\add_farmer;
use App\Models\collection;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function operation(){

        $member = add_farmer::count('id');
        $employee = employee::count('id');
        $milk = collection::sum('milk_amount');
        $total_price = collection::sum('price');
        $total_order = delivery::sum('milk_amount');
        $total_earn = delivery::sum('price');
        return view('report',compact('member','employee','milk','total_price',
                    'total_order','total_earn' ));
    }
}
