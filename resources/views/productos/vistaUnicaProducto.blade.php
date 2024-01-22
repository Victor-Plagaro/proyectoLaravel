@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        <img src="{{ asset($productos['imagen']) }}" class="img-fluid rounded" width="600" />
        <h4>{{ $productos['nombre'] }}</h4>
        <p><b>{{ $productos['descripcion'] }}</b></p>
        <h5> {{ $productos['precio'] }} </h5>
    </div>
@endsection