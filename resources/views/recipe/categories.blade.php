@extends('layouts.app')

@section('content')
    <h1 class="main-title text-center">Todas las categorias</h1>
    <div class="row recipes pt-5  d-flex justify-content-between">
    @foreach ($categories as $category)
        <div class="col-md-3 category py-4 m-2">
            <a href="{{url('recipe/category/'.$category->id).'/order/id'}}">
                <h2 class="second-title recipe-title text-center">{{ $category->name }}</h2>
            </a>
        </div>
    @endforeach
    </div>
@endsection