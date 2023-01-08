<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function create()
    {
        return view('images.create');
    }

    public function test(){
        dd('ppp');
    }

    public function store(Request $request)
    {
        dd("ddddd--------");

//        $this->validate($request, [
//            'file' => 'required|max:2048'
//        ]);

        dd($request->hasFile('file'));

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'files/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
        }

        return back()->withSuccess('File uploaded successfully');

//        $path = $request->file('image')->store('images', 's3');
//
//        Storage::disk('s3')->setVisibility($path, 'public');
//
//        $image = Image::create([
//            'filename' => basename($path),
//            'url' => Storage::disk('s3')->url($path)
//        ]);
//
//        return $image;
    }

    public function show(Image $image)
    {
        return $image->url;
    }

}
