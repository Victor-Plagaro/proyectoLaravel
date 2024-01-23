@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!-- Con el compact. Me sale -->
<div class="row">
        <img src="{{ asset($viewData['producto']['imagen']) }}" class="img-fluid rounded" width="600" />
        <h4>{{ $viewData['producto']['nombre'] }}</h4>
        <p><b>{{ $viewData['producto']['descripcion'] }}</b></p>
        <h5>{{ $viewData['producto']['precio'] }}</h5>
    </div>
@endsection