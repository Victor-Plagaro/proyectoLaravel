<?php

namespace App\Http\Controllers;

class ProductosController extends Controller
{
    private $productos = [
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

    public function gridProductos(){    
        $viewData = [];
        $viewData["title"] = "Tienda online";
        $viewData["subtitle"] = "Listado de productos";
        $viewData["productos"] = $this->productos;
        $productos = $viewData["productos"];
        //return view("productos.gridProductos")->with("viewData", $viewData);
        return view('productos.gridProductos', compact("productos")) -> with("viewData", $viewData);
    }

    public function show($id){    
        $viewData["title"] = "Tienda online";
        $viewData["subtitle"] = "Producto";
        $viewData["productos"] = $this->productos;
        $productos = $viewData["productos"];
        return view('productos.vistaUnicaProducto', compact("productos")) -> with("viewData", $viewData);
    }
}
