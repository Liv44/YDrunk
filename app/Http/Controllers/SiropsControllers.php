<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sirop;

class SiropsControllers extends Controller
{
    public function index() {
        $sirops = Sirop::all();

        return(view('sirops.index', compact('sirops')));
    }

    public function store(Request $request){
        $sirop = new Sirop();
        $sirop->name = $request->get('name');
        $sirop->save();
        return redirect()->route('sirops.index');
    }

    public function delete($id) {
        $sirop = Sirop::find($id);
        $sirop->delete();

        return redirect()->route('sirops.index');
    }

    public function edit($id) {
        $sirop = Sirop::findOrFail($id);

        return view('sirops.edit', compact('sirop'));
    }

    public function update(Request $request, $id) {
        $sirop = Sirop::findOrFail($id);
        $sirop->name = $request->get('name');
        $sirop->save();
        return redirect()->route('sirops.index');
    }
}