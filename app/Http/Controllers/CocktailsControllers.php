<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\Glass;

class CocktailsControllers extends Controller
{
    public function index() {
        $cocktails = Cocktail::all();
        return(view('cocktails.index', compact('cocktails')));
    }

    public function create() {
        $cocktails = Cocktail::all();

        $glasses= Glass::all();

        //faire un redirect vers view('ingredients.addIngredient) en renvoyant l'ID du cocktail;
        return(view('cocktails.create', compact('cocktails', 'glasses')));
    }

    public function delete($id) {
        $cocktail = Cocktail::find($id);
        $cocktail->delete();

        return redirect()->route('cocktails.index');
    }

    public function store(Request $request){
        $cocktail = new Cocktail();
        $cocktail->name = $request->get('name');
        $cocktail->glass_id = $request->get('glass');
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }

    public function edit($id) {
        $cocktail = Cocktail::findOrFail($id);
        $glassTypes = Glass::with('cocktailsName')->get();

        return view('cocktails.edit', compact('cocktail', 'glassTypes'));
    }

    public function update(Request $request, $id) {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->name = $request->get('name');
        $cocktail->glass_id = $request->get('glass_id');
        // $alcool->degree = $request->get('degree');
        // $alcool->alcool_type_id = $request->get('alcool_type_id');
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }
}
