@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 mt-4">
        <h2>{{ $user->name }}</h2>
        <span>Fecha de creacion: {{ $user->created_at }}</span>
    </div>
</div>
<h1 class="main-title text-center m-4">Recetas de {{ $user->name }}</h1>
<div class="row recipes mt-2">
    @foreach ($recipes as $recipe)
    <div class="col-md-4 recipe py-4">
        <a href="{{url('recipe/show?id='.$recipe->id)}}">
            <div class="recipe-thumb">
                <img class="img-fluid" src="{{ asset('/storage/'.$recipe->image_path) }}"
                    alt="Imagen de {{ $recipe->title }}">
            </div>
            <h2 class="second-title recipe-title">{{ $recipe->title }}</h2>
        </a>
    </div>
    @endforeach
</div>
<div class="pagination pt-3">
    {{$recipes->links()}}
</div>
@endsection
