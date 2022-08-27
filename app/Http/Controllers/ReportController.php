<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;
use App\Models\employee;
use App\Models\add_farmer;
use App\Models\collection;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function operation(){

        $member = add_farmer::count('id');
        $employee = employee::count('id');
        $milk = collection::sum('milk_amount');
        $total_price = collection::sum('price');
        $total_order = delivery::sum('milk_amount');
        $total_earn = delivery::sum('price');
        $profit = $total_earn-$total_price;
        // $delivery = delivery::select(
        //             DB::raw(value:"COUNT(*) as count"),
        //             DB::raw(value:'MONTHNAME(created_at) as month_name'),
        //             DB::raw(value:"SUM(milk_amount) as total")
        // )

        // ->whereYear('created_at',date(format:'Y'))
        // ->groupBy('month_name')
        // ->get();
        // dd($delivery);
        // $delivery = delivery::whereBetween('created_at',[Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()])

        //             ->sum('milk_amount')
        //             ->get();
        //             dd($delivery);
        $delivery = delivery::select(
                    DB::raw(value:"COUNT(*) as count"),
                    DB::raw(value:'MONTHNAME(created_at) as month_name'),
                    DB::raw(value:"SUM(milk_amount) as total")
                )
                   ->whereBetween('created_at',[Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()])
                   ->groupBy('month_name')
                   ->get();

        $delivery1 =collection::select(
                    DB::raw(value:"COUNT(*) as count"),
                    DB::raw(value:'MONTHNAME(created_at) as month_name'),
                    DB::raw(value:"SUM(milk_amount) as total")
                )
                   ->whereBetween('created_at',[Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()])
                   ->groupBy('month_name')
                   ->get();

        $delivery2 =delivery::select(
                    DB::raw(value:"COUNT(*) as count"),
                    DB::raw(value:"SUM(milk_amount) as total")
                )
                   ->whereYear('created_at',date(format:'Y'))
                   ->get();

        $delivery3 =collection::select(
                    DB::raw(value:"COUNT(*) as count"),
                    DB::raw(value:"SUM(milk_amount) as total")
                )
                   ->whereYear('created_at',date(format:'Y'))
                   ->get();           
                                      

        return view('report',compact('member','employee','milk','total_price',

                    'total_order','total_earn','profit',
                    
                    'delivery','delivery1','delivery2','delivery3'));
    }
}
