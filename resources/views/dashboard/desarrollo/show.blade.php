@extends('dashboard.master')
@section('contenido')
@extends('dashboard.partials.validation-error')

<form action="{{ route('desarrollo.store') }}" method="administracion">
    <br>
    <br>
    <div class="row">
        <div class="form-group">
            <label for="name">Nombre Materia</label>
            <input type="text" name="name" id="name" value="{{ $desarrollo->name }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label for="description">Docente</label>
            <input type="text" name="description" id="description" value="{{ $desarrollo->description }}" readonly>
        </div>
    </div>
</form>
@endsection