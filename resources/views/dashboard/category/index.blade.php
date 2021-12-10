
@extends('dashboard.master')

@section('content')
    <div class="container">

    <h4>Categorias</h4>

    <a href="{{url('dashboard/category/create')}}" class="btn btn-primary">Crear nueva categoria</a>
    <br><br>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categorias</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($category as $category)
            <tr>
                <th scope="row">{{$category -> id}}</th>
                <td>{{$category -> category}}</td>
                <td>{{$category -> description_category}}</td>
                <td>
                    <a href="{{route('category.show', $category -> id)}}" class="btn btn-success">Ver</a>
                    <a href="{{route('category.edit', $category -> id)}}" class="btn btn-primary">Editar</a>
                    
                    <form action="{{url('/dashboard/category/'.$category->id)}}" method="post" class="d-inline">
                        @csrf

                        {{ method_field('DELETE')}}
    
                        <input type="submit" onclick="return confirm('¿Deseas eliminar esta categoria')" value="Eliminar" class="btn btn-danger">   
                    </form>

                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>

    {{-- {!!$post->links()!!} --}}

</div>
@endsection

