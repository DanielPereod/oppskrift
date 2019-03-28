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

<form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input class="form-control" type="text" name="title" />
    </div>
    {{-- TODO: CREAR NUEVOS CON JAVASCRIPT --}}
    <div class="form-group" id="ingredients">
        <label for="ingredient">Ingrediente</label>
        <input class="form-control" type="text" name="ingredient[]" placeholder="Escribe un ingrediente..." />
    </div>
    <div class="add-icon" id="add-ingredient">Añadir Ingrediente +</div>

    <div class="form-group" id="steps">
        <label for="description">Preparacion</label>
        <textarea class="form-control" type="text" name="description[]" placeholder="Escribe el paso 1..." ></textarea>
    </div> 
    <div class="add-icon" id="add-step">Añadir paso +</div>

    <div class="form-group">
        <label for="description">Preparacion</label>
        <select class="form-control" name="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option> 
                @endforeach
            </select>
    </div>

    <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="info">Imagen</label>
        <select class="form-control" name="info[]">
            <option value="3">Facil</option>
            <option value="2">Media</option>
            <option value="1">Dificil</option>
        </select>
    </div>

    <div class="form-group">
        <label for="info">Comensales</label>
        <input class="form-control" type="text" name="info[]">
    </div>

    <div class="form-group">
        <label for="info">Tiempo</label>
        <input class="form-control" type="text" name="info[]">
    </div>

    <button type="submit">Crear receta</button>
</form>


@endsection
