<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlcoolType;

class AlcoolsTypeControllers extends Controller
{
    public function index() {
        $alcools = AlcoolType::all();

        return(view('alcoolstype.index', compact('alcools')));
    }

    public function delete($id) {
        $alcool = AlcoolType::find($id);
        $alcool->delete();

        return redirect()->route('alcoolstype.index');
    }

    public function store(Request $request){
        $alcool = new AlcoolType();
        $alcool->name = $request->get('name');
        $alcool->save();
        return redirect()->route('alcoolstype.index');
    }

    public function edit($id) {
        $alcool = AlcoolType::findOrFail($id);

        return view('alcoolstype.edit', compact('alcool'));
    }
    
    public function update(Request $request, $id) {
        $alcool = AlcoolType::findOrFail($id);
        $alcool->name = $request->get('name');
        $alcool->save();
        return redirect()->route('alcoolstype.index');
    }
}