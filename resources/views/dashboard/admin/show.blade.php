@extends('dashboard.master')
@section('contenido')
@extends('dashboard.partials.validation-error')

<form action="{{ route('administracion.store') }}" method="administracion">
    <br>
    <br>
    <div class="row">
        <div class="form-group">
            <label for="name">Nombre Materia</label>
            <input type="text" name="name" id="name" value="{{ $administracion->name }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label for="description">Docente</label>
            <input type="text" name="description" id="description" value="{{ $administracion->description }}" readonly>
        </div>
    </div>
</form>
@endsection