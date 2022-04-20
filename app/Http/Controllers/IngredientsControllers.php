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
        $ingredientsNotChecked = Ingredient::where('cocktail_id', $id)->get();
        $cocktailName = Cocktail::find($id)->name;
        $alcools= Alcools::all();
        $sirops= Sirop::all();
        $softs= Soft::all();
        $fruits= Fruit::all();
        foreach($ingredientsNotChecked as $ingredient){
            if($ingredient->ingredientName==null){
                $ingredient->delete();
            } else if ($ingredient->ingredientName->name==null){
                $ingredient->delete();
            }
        }
        
        $ingredients = Ingredient::where('cocktail_id', $id)->get();

        return(view('ingredients.index', compact('cocktailName', 'ingredients', 'alcools', 'sirops', 'fruits', 'softs', 'id')));
    }

    public function add(Request $request, $id){
        $ingredients = $request->all();
        $numberIngredients = $request->get('counter');

        for($i=0;$i<$numberIngredients;$i++){
            if(array_key_exists('ingredient_type_'.$i, $ingredients)){
            $ingredient = new Ingredient();
            $ingredient->cocktail_id = $id;
            $ingredient->ingredient_type = $ingredients['ingredient_type_'.$i];
            $ingredient->ingredient_id = $ingredients['ingredient_id_'.$i];
            $ingredient->quantity = $ingredients['quantity_'.$i];
            $ingredient->save();
            }
        }

        return redirect()->route('ingredients.index', $id);
    }

    public function delete($id) {
        $ingredient = Ingredient::FindOrFail($id);
        $idCocktail = $ingredient->cocktail_id;
        $ingredient->delete();

        return redirect()->route('ingredients.index', $idCocktail);
    }

}
