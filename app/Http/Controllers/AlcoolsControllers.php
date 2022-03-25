<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alcool;

class AlcoolsControllers extends Controller
{
    public function index() {
        $alcools = Alcool::all();

        return(view('alcools.index', compact('alcools')));
    }

    public function delete($id) {
        $alcool = Alcool::find($id);
        $alcool->delete();

        return redirect()->route('alcools.index');
    }

    public function store(Request $request){
        $alcool = new Alcool();
        $alcool->name = $request->get('name');
        $alcool->save();
        return redirect()->route('alcools.index');
    }
}