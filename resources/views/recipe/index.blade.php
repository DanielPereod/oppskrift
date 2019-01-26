@extends('layouts.app')

@section('content')
    <h1 class="main-title text-center">Todas las recetas</h1>
    <div class="row recipes pt-5">
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