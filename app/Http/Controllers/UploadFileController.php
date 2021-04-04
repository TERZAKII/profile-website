<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Form;



class UploadFileController extends Controller
{

    public function uploadform() {
        return view('fileUpload.file_upload');
    }
    public function uploadsubmit(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'mail' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        
        $newName = time() . '-' . $request -> name . '.' . $request -> image -> extension();

        $request -> image -> move(public_path('uploads'), $newName);

        
        Form::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'mail' => $request->mail,
            'file' => $newName
        ]);

        return redirect('/upload');
    }
}
