@extends('layouts.app')
@section('content')
    <h1 class="main-title">Todas las recetas</h1>
    @foreach ($recipes as $recipe)

        <h2 class="second-title">{{ $recipe->title }}</h2>
        <img src="{{ $recipe->image_path }}" alt="Imagen de {{ $recipe->title }}">
        

    @endforeach

@endsection