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

        Storage::disk('s3')->setVisibility($path,'public');

        $image = Image::create([
            'filename' => basename($path),           //nome do arquivo
            'url' => Storage::disk('s3')->url($path) //link da imagem na s3
        ]);

        return $image; 
    }

    public function show(Image $image)
    {
        return Storage::disk('s3')->response('images/'.$image->filename);
        //return $image->url;
        
        /*
        $filePath = $image->url;
        return redirect(Storage::disk('s3')->temporaryUrl(
            $filePath,
            now()->addHour(),
            ['ResponseContentDisposition' => 'attachment']
        ));
        */
    }

}
