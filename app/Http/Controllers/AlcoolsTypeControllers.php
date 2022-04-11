<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlcoolType;

class AlcoolsTypeControllers extends Controller
{
    public function index() {
        $alcoolsType = AlcoolType::all();

        return(view('alcoolstype.index', compact('alcoolsType')));
    }

    public function delete($id) {
        $alcoolType = AlcoolType::find($id);
        $alcoolType->delete();

        return redirect()->route('alcoolstype.index');
    }

    public function store(Request $request){
        $alcoolType = new AlcoolType();
        $alcoolType->name = $request->get('name');
        $alcoolType->save();
        return redirect()->route('alcoolstype.index');
    }

    public function edit($id) {
        $alcoolType = AlcoolType::findOrFail($id);

        return view('alcoolstype.edit', compact('alcoolType'));
    }
    
    public function update(Request $request, $id) {
        $alcoolType = AlcoolType::findOrFail($id);
        $alcoolType->name = $request->get('name');
        $alcoolType->save();
        return redirect()->route('alcoolstype.index');
    }
}