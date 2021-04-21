<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Form;



class UploadFileController extends Controller
{

    public function uploadform() {
        return view('Project');
    }
    public function uploadsubmit(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'city' => 'required',
            'street' => 'required',
            'checkList' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        
        $newName = time() . '-' . $request -> name . '.' . $request -> checkList -> extension();

        $request -> checkList -> move(public_path('uploads'), $newName);

        
        
        Form::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'telephone' => $request->telephone,
            'city' => $request->city,
            'street' => $request->street,
            'checkList' => $newName
        ]);

        return redirect('/upload');
    }
}
