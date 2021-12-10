
@csrf
@include('dashboard.partials.validation-error')

<div class="form-group">
    <input class="form-control" type="text" name="category" id="category" placeholder="Nombre publicación"
        value="{{ old('category', $category->category) }}">
</div>
<br>
<div class="form-group mb-3">
    <textarea class="form-control" name="description_category" id="description_category" cols="30" rows="10" placeholder="Descripción de la categoria">{{ old('description_category', $category->description_category) }}
    </textarea>
</div>

<div class="mb-3">
    <button class="btn btn-success btn-sm" type="submit">Guardar</button>
    <a href="" class="btn btn-danger btn-sm">Cancelar</a>
</div>