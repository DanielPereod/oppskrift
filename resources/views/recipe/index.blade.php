@extends('layouts.app')

@section('content')
    <h1 class="main-title text-center">Todas las recetas</h1>
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ordenar
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{route($url,['by' => 'created_at', 'id' => $id])}}">Recientes</a>
                  <a class="dropdown-item" href="{{route($url,['by' => 'votes', 'id' => $id])}}">Popularidad</a>
                  <a class="dropdown-item" href="{{route($url,['by' => 'title', 'id' => $id])}}">Nombre</a>
                </div>
              </div>
        </div>
    </div>
    <div class="row recipes mt-2">
    @foreach ($recipes as $recipe)
        <div class="col-md-4 recipe py-4">
            <a href="{{url('recipe/show?id='.$recipe->id)}}">
                <div class="recipe-thumb">
                    <img class="img-fluid" src="{{ asset('/storage/'.$recipe->image_path) }}" alt="Imagen de {{ $recipe->title }}">
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