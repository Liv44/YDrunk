<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruits;

class FruitsControllers extends Controller
{
    public function index(){

        $fruits = Fruits::all();
        // dd($softs);  
        return(view('fruits.index', compact('fruits')));
    }

    public function store(Request $request){   
        $fruits = new Fruits();
        $fruits->name = $request->get('name');
        $fruits->save();
        return redirect()->route('fruits.index');
    }
}
