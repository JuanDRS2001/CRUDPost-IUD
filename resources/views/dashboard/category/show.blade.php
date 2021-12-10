@extends('dashboard.master')

@section('content')

<h4>Categoria completa</h4>

    <div class="form-group">
        <input readonly class="form-control" type="text" name="category" id="category" placeholder="Nombre Publicacion" value="{{$category -> category}}">
    </div>
<br>
    <div class="form-group">
        <textarea readonly class="form-control" name="description_category" id="description_category" cols="30" rows="10">{{$category -> description_category}}</textarea>
    </div>    
<br>
    <div>
        <button type="submit" class="btn btn-success">Publicar</button>
        <a href="" class="btn btn-danger">Cancelar</a>
    </div>
    
@endsection