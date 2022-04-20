<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\Ingredient;
use App\Models\Alcools;
use App\Models\Sirop;
use App\Models\Fruit;
use App\Models\Soft;

class IngredientsControllers extends Controller
{
    public function index($id){
        $ingredients = Ingredient::where('cocktail_id', $id)->get();

        $alcools= Alcools::all();
        $sirops= Sirop::all();
        $softs= Soft::all();
        $fruits= Fruit::all();

        return(view('ingredients.index', compact('ingredients', 'alcools', 'sirops', 'fruits', 'softs')));
    }

    public function add(Request $request, $id){
        $ingredients = $request->all();
        $numberIngredients = (count($ingredients)-1)/3;

        for($i=0;$i<$numberIngredients;$i++){
            $ingredient = new Ingredient();
            $ingredient->cocktail_id = $id;
            $ingredient->ingredient_type = $ingredients['ingredient_type_'.$i];
            $ingredient->ingredient_id = $ingredients['ingredient_id_'.$i];
            $ingredient->quantity = $ingredients['quantity_'.$i];
            $ingredient->save();
        }

        return redirect()->route('ingredients.index', $id);
    }

}
