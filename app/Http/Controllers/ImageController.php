<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    
    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        
        $path = $request->file('image')->store('images');

        return $path;
    }

    public function show(Image $image)
    {

    }

}
