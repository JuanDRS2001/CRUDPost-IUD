
@extends('dashboard.master')

@section('content')
    <div class="container">

    <h4>Publicaciones</h4>

    <a href="{{url('dashboard/post/create')}}" class="btn btn-primary">Crear nuevo post</a>
    <br><br>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Publicación</th>
            <th scope="col">Contenido</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($post as $post)
            <tr>
                <th scope="row">{{$post -> id}}</th>
                <td>{{$post -> publication}}</td>
                <td>{{$post -> publication_description}}</td>
                <td>
                    <a href="{{route('post.show', $post -> id)}}" class="btn btn-success">Ver</a>
                    <a href="{{route('post.edit', $post -> id)}}" class="btn btn-primary">Editar</a>
                    
                    <form action="{{url('/dashboard/post/'.$post->id)}}" method="post" class="d-inline">
                        @csrf

                        {{ method_field('DELETE')}}
    
                        <input type="submit" onclick="return confirm('¿Deseas eliminar esta publicación')" value="Eliminar" class="btn btn-danger">   
                    </form>

                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>

    {{-- {!!$post->links()!!} --}}

</div>
@endsection

