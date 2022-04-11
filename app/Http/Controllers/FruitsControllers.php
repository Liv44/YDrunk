<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitsControllers extends Controller
{
    public function index(){

        $allFruits = Fruit::all(); 
        return(view('fruits.index', compact('allFruits')));
    }

    public function store(Request $request){   
        $fruit = new Fruit();
        $fruit->name = $request->get('name');
        // TO DO : Insert image
        // $fruit->
        $fruit->save();
        return redirect()->route('fruits.index');
    }

    public function delete($id) {
        $fruit = Fruit::findOrFail($id);
        $fruit->delete();
        return redirect()->route('fruits.index');
    }

    public function edit($id)
    {
        $fruit = Fruit::findOrFail($id);
        return view('fruits.edit', compact('fruit'));
    }

    public function update(Request $request, $id)
    {
        $fruit = Fruit::findOrFail($id);
        $fruit->name = $request->get('name');
        $fruit->save();
        return redirect()->route('fruits.index');
    }
    // public function index(){

    //     $fruits = Fruits::all();
    //     // dd($softs);  
    //     return(view('fruits.index', compact('fruits')));
    // }

    // public function store(Request $request){   
    //     $fruit = new Fruits();
    //     $fruit->name = $request->get('name');
    //     $fruit->save();
    //     return redirect()->route('fruits.index');
    // }
}
