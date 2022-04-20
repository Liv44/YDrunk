<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alcools;
use App\Models\AlcoolType;

class AlcoolsControllers extends Controller
{
    public function index() {
        $alcools = Alcools::with('alcoolsType')->get();
        $alcoolTypes = AlcoolType::with('alcoolsName')->get();
        return(view('alcools.index', compact('alcools', 'alcoolTypes')));
    }

    public function delete($id) {
        $alcool = Alcools::find($id);
        $alcool->delete();
        return redirect()->route('alcools.index');
    }

    public function store(Request $request){
        $alcool = new Alcools();
        $alcool->name = $request->get('name');
        $alcool->degree = $request->get('degree');
        $alcool->alcool_type_id = $request->get('alcool_type_id');
        $alcool->save();
        return redirect()->route('alcools.index');
    }

    public function edit($id) {
        $alcool = Alcools::findOrFail($id);
        $alcoolTypes = AlcoolType::with('alcoolsName')->get();
        return view('alcools.edit', compact('alcool', 'alcoolTypes'));
    }

    public function update(Request $request, $id) {
        $alcool = Alcools::findOrFail($id);
        $alcool->name = $request->get('name');
        $alcool->degree = $request->get('degree');
        $alcool->alcool_type_id = $request->get('alcool_type_id');
        $alcool->save();
        return redirect()->route('alcools.index');
    }

}