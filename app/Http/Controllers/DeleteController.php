<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\add_farmer;
use Illuminate\Support\Facades\DB;


class DeleteController extends Controller
{
        public function destroy($id) {
        add_farmer::find($id)->delete();
        return redirect()->back();
    }
}
