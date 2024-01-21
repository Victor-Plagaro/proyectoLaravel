<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function gridProductos(){
        $viewData = [];
        $productos = [
            [
                'id' => 1,
                'nombre' => 'TV',
                'precio' => 599.99,
                'descripcion' => 'Televisor de alta definición con pantalla LED de 55 pulgadas.',
                'imagen' => '/img/game.png'
            ],
            [
                'id' => 2,
                'nombre' => 'iPhone',
                'precio' => 999.99,
                'descripcion' => 'Último modelo de iPhone con pantalla OLED de 6.1 pulgadas.',
                'imagen' => '/img/safe.png'
            ],
            [
                'id' => 3,
                'nombre' => 'Chromecast',
                'precio' => 49.99,
                'descripcion' => 'Dispositivo de transmisión para reproducir contenido multimedia en tu televisor.',
                'imagen' => '/img/submarine.png'
            ],
        ];        

        $viewData["title"] = "Tienda online";
        $viewData["subtitle"] = "Listado de productos";
        return view("productos.gridProductos", compact('productos'))->with("viewData", $viewData);
    }

    public function show($id){
        $productos = [
            [
                'id' => 1,
                'nombre' => 'TV',
                'precio' => 599.99,
                'descripcion' => 'Televisor de alta definición con pantalla LED de 55 pulgadas.',
                'imagen' => '/img/game.png'
            ],
            [
                'id' => 2,
                'nombre' => 'iPhone',
                'precio' => 999.99,
                'descripcion' => 'Último modelo de iPhone con pantalla OLED de 6.1 pulgadas.',
                'imagen' => '/img/safe.png'
            ],
            [
                'id' => 3,
                'nombre' => 'Chromecast',
                'precio' => 49.99,
                'descripcion' => 'Dispositivo de transmisión para reproducir contenido multimedia en tu televisor.',
                'imagen' => '/img/submarine.png'
            ],
        ];        
        
        $producto = Product::find($id);

        if (!$producto) {
            abort(404, 'Producto no encontrado');
        }

        return view('productos.vistaUnicaProducto', compact('productos')) -> width("viewData", $viewData);
    }
}
