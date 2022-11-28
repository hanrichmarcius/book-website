<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use App\Models\publishers;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('index',[
            "book" => books::all(),
            "categorynew" => categories::all()
        ]);
    }

    public function publisher(){
        return view ('publisher',[
            "publisher" => publishers::all(),
            "categorynew" => categories::all()
        ]);
    }

    public function contact(){
        return view ('contact',[
            "categorynew" => categories::all()
        ]);
    }

    public function detail($id){
        return view('detail',[
            "details" => books::find($id),
            "categorynew" => categories::all()
        ]);
    }

}

