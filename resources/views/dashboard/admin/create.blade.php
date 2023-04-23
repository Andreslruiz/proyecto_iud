@extends('dashboard.master')
@section('contenido')
@extends('dashboard.partials.validation-error')

<form action="{{ route('administracion.store') }}" method="administracion">
    @csrf
    <br>
    <br>
    <div class="row">
        <div class="form-group">
            <label for="name">Nombre Materia</label>
            <input type="text" name="name" id="name">
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label for="description">Docente</label>
            <input type="text" name="description" id="description">
        </div>
    </div>

    <div class="col center">
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Crear Materia</button>
            <button class="btn btn-danger btn-sm">Cancelar</button>
        </div>
    </div>
</form>
@endsection