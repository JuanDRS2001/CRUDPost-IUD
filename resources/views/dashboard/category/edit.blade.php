@extends('dashboard.master')

@section('content')

<h4>Editar Publicacion</h4>

    <form action="{{route('category.update', $category -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.category._form')
    </form>
    
@endsection