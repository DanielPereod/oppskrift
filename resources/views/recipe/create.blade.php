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

<form action="{{route('save')}}" id="createRecipeForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input class="form-control" type="text" id="title" name="title" required />
    </div>

    <div class="form-group" id="ingredients">
        <label for="ingredient">Ingrediente</label>
        <input class="form-control" type="text" name="ingredient[]" id="ingredient"
            placeholder="Escribe un ingrediente..." required />
    </div>
    <div class="add-icon" id="add-ingredient">Añadir Ingrediente +</div>

    <div class="form-group" id="steps">
        <label for="description">Preparacion</label>
        <textarea class="form-control" type="text" id="description" name="description[]"
            placeholder="Escribe el paso 1..." required></textarea>
    </div>
    <div class="add-icon" id="add-step">Añadir paso +</div>

    <div class="form-group">
        <label for="category">Categoria</label>
        <select class="form-control" name="category" required>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" name="image" accept=".png, .jpg .jpeg" required>
    </div>

    <div class="form-group">
        <label for="info">Dificultad</label>
        <select class="form-control" name="info[]">
            <option value="3">Facil</option>
            <option value="2">Media</option>
            <option value="1">Dificil</option>
        </select>
    </div>

    <div class="form-group">
        <label for="info">Comensales</label>
        <input class="form-control" type="number" name="info[]" id="comensales"  placeholder="Introduce el número de comensales..."   required>
    </div>

    <div class="form-group">
        <label for="info">Tiempo</label>
        <input class="form-control" type="number" id="tiempo" name="info[]" placeholder="Introduce en minutos el tiempo para hacer la receta..." required>
    </div>

    <button id="but-recipe-create" class="btn btn-success" type="submit">Crear receta</button>
</form>


@endsection
