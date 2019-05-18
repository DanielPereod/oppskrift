@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 mt-4">
        <h2>Recetas favoritas</h2>
    </div>
</div>
<div class="row recipes mt-2">
    @if (isset($recipes) && count($recipes) > 0)
        @foreach ($recipes as $recipe)
        <div class="col-md-4 recipe py-4">
            <a href="{{route('user.favoriteRemove', ['id' => $recipe->id])}}" class="btn btn-outline-danger btn-sm">Quitar de favoritos</a>
            <a href="{{url('recipe/show?id='.$recipe->id)}}">
                <div class="recipe-thumb">
                    <img class="img-fluid" src="{{ asset('/storage/'.$recipe->image_path) }}"
                        alt="Imagen de {{ $recipe->title }}">
                </div>
                <h2 class="second-title recipe-title">{{ $recipe->title }}</h2>
            </a>
        </div>
        @endforeach
    @else
    <div class="col-md-6 mt-4">
        <h4>No hay recetas favoritas</h4>
    </div>
    @endif
    
</div>
<div class="pagination pt-3">
    @if (isset($recipes))
    {{$recipes->links()}}
    @endif
</div>
@endsection
