@extends('dashboard.master')

@section('content')
    <h4>Editar Publicacion</h4>

    <form action="{{route('post.update', $post -> id) }}" method="post">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
    
@endsection