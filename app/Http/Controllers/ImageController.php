<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Storage;

class ImageController extends Controller
{
    
    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {

        $path = $request->file('image')->store('images','s3');

        $image = Image::create([
            'filename' => basename($path),           //nome do arquivo
            'url' => Storage::disk('s3')->url($path) //link da imagem na s3
        ]);

        return $image;
    }

    public function show(Image $image)
    {

    }

}
