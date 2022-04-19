<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktails;

class CocktailsControllers extends Controller
{
    public function index() {
        $cocktails = Cocktails::all();
        // $cocktails = Cocktails::with('alcoolsType')->get();
        // $alcoolTypes = AlcoolType::with('alcoolsName')->get();
        return(view('cocktails.index', compact('cocktails')));
    }

    public function delete($id) {
        $cocktail = Cocktails::find($id);
        $cocktail->delete();

        return redirect()->route('cocktails.index');
    }

    public function store(Request $request){
        $cocktail = new Cocktails();
        $cocktail->name = $request->get('name');
        // $alcool->degree = $request->get('degree');
        // $alcool->alcool_type_id = $request->get('alcool_type_id');
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }

    public function edit($id) {
        $cocktail = Cocktails::findOrFail($id);
        // $alcoolTypes = AlcoolType::with('alcoolsName')->get();

        return view('cocktails.edit', compact('cocktails'));
    }

    public function update(Request $request, $id) {
        $cocktail = Cocktails::findOrFail($id);
        $cocktail->name = $request->get('name');
        // $alcool->degree = $request->get('degree');
        // $alcool->alcool_type_id = $request->get('alcool_type_id');
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }
}
