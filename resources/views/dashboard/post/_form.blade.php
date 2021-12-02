@csrf
@include('dashboard.partials.validation-error')

<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre Publicacion" value="{{old('publication', $post -> publication)}}">
</div>
<br>
<div class="form-group">
    <textarea class="form-control" name="publication_description" id="publication_description" cols="30" rows="10">{{old('publication_description', $post -> publication_description)}}</textarea>
</div>
<br>
<div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{url('dashboard/post')}}" class="btn btn-danger">Cancelar</a>
</div>

{{-- Problemas con category Formulario con opciones de categoria y estado de publicación --}}
{{-- @csrf
    @include('dashboard.partials.validation-error')
    
        <div class="form-group">
            <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre Publicacion" value="{{old('publication', $post -> publication)}}">
        </div>

        <div class="form-group">
            <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
                <option selected disabled> Selecciona una opción</option>
                @foreach ($categories as $category => $id)
                    <option {{ $post ->category_id == $id ? 
                    'selected="selected"':''}} value="{{ $id }}"> 
                        {{category}} 
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="state" id="state">
                <option value="">Publicado</option>
                <option value="">No Publicado</option>
                <option value="">Revisión</option>
            </select>
        </div>

        <div class="form-group">
            <textarea class="form-control" name="publication_description" id="publication_description" cols="30" rows="10" placeholder="Escribe tu publicación">{{old('publication_description', $post -> publication_description)}}</textarea>
        </div>

        
        <div class="form-group">
            <select class="custom-select" name="state" id="state">
                @include('dashboard.component.state_options', ['val' => post->state])
            </select>
        </div>
    
        <br>
        
        <button type="submit" class="btn btn-success">Guardar</button>
        <a class="btn btn-danger" href="{{URL::previous()}}">Cancelar</a> --}}