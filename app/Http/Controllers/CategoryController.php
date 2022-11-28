<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        return view('categories',[
            "categorysearch" => categories::find($id),
            "categorynew" => categories::all()
        ]);
    }
}
