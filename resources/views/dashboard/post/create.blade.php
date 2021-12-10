@extends('dashboard.master')

@section('content')

<h4>Crear Nueva Publicación</h4>

    <form action="{{route('post.store')}}" method="post">
        @include('dashboard.post._form')
    </form>
    
@endsection