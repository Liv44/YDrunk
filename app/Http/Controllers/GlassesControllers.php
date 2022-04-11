<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glass;


class GlassesControllers extends Controller
{
    public function index(){

        $glasses = Glass::all(); 
        return(view('glasses.index', compact('glasses')));
    }

    public function store(Request $request){   
        $glass = new Glass();
        $glass->name = $request->get('name');
        $glass->imageURL = $request->get('imageURL');
        $glass->save();
        return redirect()->route('glasses.index');
    }

    public function edit($id)
    {
        $glass = Glass::findOrFail($id);

        return view('glasses.edit', compact('glass'));
    }

    public function update(Request $request, $id)
    {
        $glass = Glass::findOrFail($id);
        $glass->name = $request->get('name');
        $glass->imageURL = $request->get('imageURL');

        $glass->save();
        return redirect()->route('glasses.index');
    }
}

