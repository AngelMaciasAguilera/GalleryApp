<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagesuser = Image::where('user', session('user'))->get();
        return view('gallery.index', ['imagesuser' => $imagesuser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('file') && $request->file('file')->isValid()) {
            //el archivo se guarda en el storage private
            $path = $request->file('file')->store('usr_images', 'local');

            //se obtiene la ruta al archivo guardado
            $realPath = storage_path('app/private') . '/' . $path;
            
            //se obtiene el contenido del archivo
            $data = file_get_contents($realPath);
            //se obtiene el contenido del archivo en base 64
            $base64 = base64_encode($data);
            //se obtiene la extensión del archivo
            $type = pathinfo($realPath, PATHINFO_EXTENSION);
            //se construye el objeto que se va a almacenar en la base de datos
            $image = new Image();
            $image->original_name = $request->file('file')->getClientOriginalName();
            $image->name = $request->file('file')->hashName();
            $image->user = session('user');
            $image->path = $path;
            $image->image64 = $base64;
            $image->image = $data;
            $image->type = $type;
            //se guarda el objeto en la base de datos
            $image->save();
            return redirect(url('image'));
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        return view('gallery.show', ['image' => $image]);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
