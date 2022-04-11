<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alcools;

class AlcoolsControllers extends Controller
{
    public function index() {
        $alcools = Alcools::all();

        return(view('alcools.index', compact('alcools')));
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
        $alcool->save();
        return redirect()->route('alcools.index');
    }

    public function edit($id) {
        $alcool = Alcools::findOrFail($id);

        return view('alcools.edit', compact('alcool'));
    }

    public function update(Request $request, $id) {
        $alcool = Alcools::findOrFail($id);
        $alcool->name = $request->get('name');
        $alcool->degree = $request->get('degree');
        $alcool->save();
        return redirect()->route('alcools.index');
    }

}