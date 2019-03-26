@extends('layouts.app')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{url('recipe/edit/'.$recipe->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input class="form-control" type="text" name="title" value="{{$recipe->title}}"/>
    </div>
    {{-- TODO: CREAR NUEVOS CON JAVASCRIPT --}}
    <div class="form-group" id="ingredients">
        <label for="ingredient">Ingrediente</label>

        @foreach (json_decode($recipe->ingredients) as $ingredient)
        <input class="form-control" type="text" name="ingredient[]" value="{{$ingredient}}" />
        @endforeach
        
    </div>
    <div class="add-icon" id="add-ingredient">Añadir Ingrediente +</div>

    <div class="form-group" id="steps">
        <label for="description">Preparacion</label>
        @foreach (json_decode($recipe->description) as $step)
        <textarea class="form-control" type="text" name="description[]">{{$step}}</textarea>
        @endforeach
    </div> 
    <div class="add-icon" id="add-step">Añadir paso +</div>

    <div class="form-group">
        <label for="description">Preparacion</label>
        <select class="form-control" name="category">
            {{-- TODO: CAMBIAR POR LAS CATEGORIAS DE LA BASE DE DATOS --}}
            <option value="1">Categoria1</option>
        </select>
    </div>

    <div class="form-group">
        <img class="image-edit-view" src="{{ asset('/storage/'.$recipe->image_path) }}" alt="">
        <label for="image">Imagen</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="info">Dificultad</label>
        <select class="form-control" name="info[]">

            @if(array_values(json_decode($recipe->info, true))[0] == 1)
            <option value="1">Dificil</option>
            <option value="3">Facil</option>
            <option value="2">Media</option>
            
            @elseif(array_values(json_decode($recipe->info, true))[0] == 2)
                <option value="2">Media</option>
                <option value="1">Dificil</option>
                <option value="3">Facil</option> 
            @elseif(array_values(json_decode($recipe->info, true))[0] == 3)
                <option value="3">Facil</option> 
                <option value="2">Media</option>
                <option value="1">Dificil</option>
            @endif
        </select>
    </div>

    <div class="form-group">
        <label for="info">Comensales</label>
        <input class="form-control" type="text" name="info[]" value="{{array_values(json_decode($recipe->info, true))[1]}}">
    </div>

    <div class="form-group">
        <label for="info">Tiempo</label>
        <input class="form-control" type="text" name="info[]" value="{{array_values(json_decode($recipe->info, true))[2]}}">
    </div>

    <button type="submit">Editar receta</button>
</form>


@endsection
