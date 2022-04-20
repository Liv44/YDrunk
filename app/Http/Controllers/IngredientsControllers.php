<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\Alcools;
use App\Models\Sirop;
use App\Models\Soft;

class IngredientsControllers extends Controller
{
    public function addIngredients($id){
        $cocktails = Cocktail::all();

        $alcools= Alcools::all();
        $sirops= Sirop::all();
        $softs= Soft::all();

        // $cocktailTypes = AlcoolType::with('cocktailsName')->get();
        return(view('ingredients.addIngredient', compact('cocktails', 'alcools', 'sirops', 'softs')));
    }
    //
}
