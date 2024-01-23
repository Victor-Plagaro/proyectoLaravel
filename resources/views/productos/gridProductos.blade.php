<!-- Vista que muestra la página "Productos" -->
@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach($viewData["productos"] as $producto)
            <div class="col-md-6 col-lg-4 mb-2">
                <img src="{{ asset($producto['imagen']) }}" class="img-fluid rounded">
                <a href="{{route('productos.vistaUnicaProducto', ['id' => $producto['id']]) }}"><button class="btn btn-primary" id="{{ $producto['id'] }}">{{ $producto['nombre'] }}</button></a>
            </div>
        @endforeach
    </div>
@endsection