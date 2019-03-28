@extends('layouts.app')

@section('content')
<a href="{{url('recipe/show?id='.$bestRecipe->id)}}">
    <div class="row pt-5 mb-5">
        <div class="col-md-6">
            <div class="recipe-main">
                <div class="row recipe-header">
                    <div class="col-8">
                        <h2 class="main-title">{{$bestRecipe->title}}</h2>
                    </div>
                </div>
                <hr class="mt-0">
                <div class="row mt-3">
                    <div class="ingredients col-md-8">
                        <ul>
                            @foreach (json_decode($bestRecipe->ingredients) as $ingredient)
                            <li class="no-link">{{$ingredient}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <img class="img-fluid rounded" src="{{ asset('/storage/'.$bestRecipe->image_path) }}" alt="">
            </div>
        </div>
    </div>
</a>
<div>
    <h2 class="main-title text-center mt-10">Prueba algo nuevo</h1>
        <div class="row recipes pt-5">
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
    <div class="d-flex justify-content-center mt-5">
        <a class="btn btn-lg btn-success" href="{{url('recipe')}}">Todas las recetas</a>
    </div>
</div>
@endsection
