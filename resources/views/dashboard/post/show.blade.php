@extends('dashboard.master')

@section('content')

<h4>Publicación completa</h4>

    <div class="form-group">
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Nombre Publicacion" value="{{$post -> publication}}">
    </div>
<br>
    <div class="form-group">
        <textarea readonly class="form-control" name="publication_description" id="publication_description" cols="30" rows="10">{{$post -> publication_description}}</textarea>
    </div>    
<br>
    <div>
        <button type="submit" class="btn btn-success">Publicar</button>
        <a href="" class="btn btn-danger">Cancelar</a>
    </div>
    
@endsection