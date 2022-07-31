<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\photo;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function load(){
        $photos = Photo::all();
        return view('upload', compact('photos'));
    }

    public function store(Request $request){

        $name = $request-> file('image')->getClientOriginalName();
        $size = $request-> file('image')->getSize();
        $request-> file('image')->storeAs('public/images/',$name);
        $photo = new Photo();
        $photo-> name = $name;
        $photo-> size = $size;
        $photo-> save();
        return redirect()->back();
        // dd($request-> file());
    }
}
