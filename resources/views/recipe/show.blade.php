@extends('layouts.app')

@section('content')
<div class="row pt-5">
    <div class="col-md-6">
        <div>
            <img class="img-fluid rounded" src="{{ asset('/storage/'.$recipe->image_path) }}" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="recipe-main">
            <div class="row recipe-header">
                <div class="col-8">
                    <h2 class="main-title">{{$recipe->title}}</h2>
                </div>
                <div class="col-4">
                    <a href="{{url('recipe/vote/'.$recipe->id)}}">
                        <img class="fork" src="{{asset('/svg/fork.png')}}" alt="votos">
                    </a>
                    <span class="votes">{{$recipe->votes}}</span>
                </div>
            </div>
            <hr class="mt-0">
            <div class="row mt-3">
                <div class="ingredients col-md-8">
                    <h3 class="second-title">ingredientes</h3>
                    <ul>
                        @foreach (json_decode($recipe->ingredients) as $ingredient)
                            <li>{{$ingredient}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="info col-md-4">
                    <h3 class="second-title">Info</h3>
                    <ul>
                        <li>
                            @if (json_decode($recipe->info)[0] == 1)
                                Difícil
                            @elseif(json_decode($recipe->info)[0] == 2)
                                Media
                            @elseif(json_decode($recipe->info)[0] == 3)
                                Fácil
                            @endif
                        <li>Comensales: {{json_decode($recipe->info)[1]}}</li>
                        <li>Tiempo: {{json_decode($recipe->info)[2]}}min</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 steps pt-5">
        <h2 class="second-title">Preparacion</h2>
        <ul class="list-group list-group-flush">
            @for ($i = 0; $i < count(json_decode($recipe->description)); $i++)
                <li class="list-group-item"><span class="second-title">{{$i+1}}.</span>{{json_decode($recipe->description)[$i]}}</li>
            @endfor
        </ul>
    </div>
    <div class="col-md-6">
        @if ($recipe->user_id == auth()->user()->id)
            <a class="btn btn-success" href="{{url('recipe/edit/'.$recipe->id)}}">Editar</a>
            <a class="btn btn-danger" href="{{url('recipe/delete/'.$recipe->id)}}">Borrar</a> 
        @endif

    </div>
</div>
@endsection