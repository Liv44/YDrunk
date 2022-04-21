<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\Glass;
use App\Models\Ingredient;


class CocktailsControllers extends Controller
{
    public function index() {
        $cocktails = Cocktail::all();
        return(view('cocktails.index', compact('cocktails')));
    }

    public function indexPublic(){
        $cocktails = Cocktail::all();
        return(view('accueil', compact('cocktails')));
    }

    public function create() {
        $cocktails = Cocktail::all();

        $glasses= Glass::all();

        return(view('cocktails.create', compact('cocktails', 'glasses')));
    }

    public function delete($id) {
        $cocktail = Cocktail::find($id);
        $cocktail->delete();
        $ingredients = Ingredient::where('cocktail_id', $id)->get();
        foreach($ingredients as $ingredient){
            $ingredient->delete();
        }
        return redirect()->route('cocktails.index');
    }

    public function store(Request $request){
        $cocktail = new Cocktail();
        $cocktail->name = $request->get('name');
        $cocktail->glass_id = $request->get('glass');
        $cocktail->save();
        return redirect()->route('ingredients.index', $cocktail->id);
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
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }
}
