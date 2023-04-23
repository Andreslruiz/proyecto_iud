
@csrf
<br>
<br>
<div class="row">
    <div class="form-group">
        <label for="name">Nombre Materia</label>
        <input type="text" name="name" id="name" value="{{ old('name', $desarrollo->name) }}">
    </div>
</div>

<div class="row">
    <div class="form-group">
        <label for="description">Docente</label>
        <input type="text" name="description" id="description" value="{{ old('description', $desarrollo->description) }}">
    </div>
</div>

<div class="col center">
    <div class="col s6">
        <button class="btn btn-success btn-sm" type="submit">Publicar</button>
        <button class="btn btn-danger btn-sm">Cancelar</button>
    </div>
</div>