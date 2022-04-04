<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soft;


class SoftsControllers extends Controller
{
    public function index(){

        $softs = Soft::all(); 
        return(view('softs.index', compact('softs')));
    }

    public function store(Request $request){   
        $soft = new Soft();
        $soft->name = $request->get('name');
        $soft->save();
        return redirect()->route('softs.index');
    }

    public function delete($id) {
        $soft = Soft::find($id);
        $soft->delete();

        return redirect()->route('softs.index');
    }

    public function edit($id)
    {
        $soft = Soft::findOrFail($id);

        return view('softs.edit', compact('soft'));
    }

    public function update(Request $request, $id)
    {
        $soft = Soft::findOrFail($id);
        $soft->name = $request->get('name');
        $soft->save();
        return redirect()->route('softs.index');
    }
}