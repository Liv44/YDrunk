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
        $cocktail = new Cocktails();
        $cocktail->name = $request->get('name');
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }
    //
}
