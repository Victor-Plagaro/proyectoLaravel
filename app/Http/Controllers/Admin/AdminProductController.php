<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AdminProductController extends Controller
{
    public $errors = [];
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store(Request $request){
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();

        $request -> input('name', 'price', 'description');
        try{
            $request -> validate([
                'name'=>'required|string|max:255', 
                'price'=>'required|numeric|min:1', 
                'description'=>'required|min:10|max:100'
            ],
            [
                'name.required'=>"El nombre es obligatorio"
            ]
            );
        }
        catch(ValidationException $e){
            $errors = $e ->errors();
            return view('admin.product.index', ['errors' => $errors])->with("viewData", $viewData);
        }
        $newProduct = new Product();
        $newProduct -> name = $request -> input('name');
        $newProduct -> price = $request -> input('price');
        $newProduct -> image = "NULL";
        $newProduct -> description = $request -> input('description');
        $newProduct -> save();
        $archivoID = $newProduct -> id;

        if($request->hasFile('archivoImagen')){
            $archivo = $request->file('archivoImagen');
            $extension = $request->file('archivoImagen')->extension();
            $nombreArchivo =  $archivoID . '_imagen.' . $extension;
            $newProduct -> image = $nombreArchivo;
            Storage::disk('public')->put($nombreArchivo, file_get_contents($archivo->path()));
            $newProduct -> save();
        }
        
        return view('admin.product.index')->with("viewData", $viewData);
    }
}
