<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soft;


class SoftsControllers extends Controller
{
    public function index(){

        $softs = Soft::all();
        // dd($softs);  
        return(view('softs.index', compact('softs')));
    }

    public function store(Request $request){   
        $soft = new Soft();
        $soft->name = $request->get('name');
        $soft->save();
        return redirect()->route('home');
    }
}
