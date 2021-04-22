<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'city' => 'required',
            'street' => 'required',
            'files' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        
        $newName = time() . '-' . $request -> name . '.' . $request -> files -> extension();

        $request -> files -> move(public_path('uploads'), $newName);
        Cart::create([
            'name'=> $request->name,
            'surname'=> $request->surname,
            'telephone'=> $request->telephone,
            'city'=> $request->city,
            'street'=> $request->street,
            'files'=> $newName
        ]);

        return back();
        // return redirect('/project');
    }
}
