<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glass;
use Illuminate\Support\Facades\Storage;


class GlassesControllers extends Controller
{
    public function index(){
        $glasses = Glass::all(); 
        return(view('glasses.index', compact('glasses')));
    }

    public function store(Request $request){  
        $file = $request->file('imageURL');
        $fileName = time() . $file->getClientOriginalName();
        $file->storeAs('public/images', $fileName);
        
        $glass = new Glass();
        $glass->name = $request->get('name');
        $glass->imageURL = $fileName;
        $glass->save();

        return redirect()->route('glasses.index');
    }

    public function edit($id)
    {
        $glass = Glass::findOrFail($id);

        return view('glasses.edit', compact('glass'));
    }

    public function update(Request $request, $id)
    {
        $glass = Glass::findOrFail($id);

        $file = $request->file('imageURL');

        if($file!==null){
            Storage::delete('public/images/' . $glass->imageURL);
            $fileName = time() . $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
            $glass->imageURL = $fileName;
        }

        $glass->name = $request->get('name');
        $glass->save();
        return redirect()->route('glasses.index');
    }
    public function delete($id) {
        $glass = Glass::find($id);
        Storage::delete('public/images/' . $glass->imageURL);
        $glass->delete();

        return redirect()->route('glasses.index');
    }
}

