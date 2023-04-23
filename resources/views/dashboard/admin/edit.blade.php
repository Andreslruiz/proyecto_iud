@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')

<form action="{{ route('administracion.update', $administracion->id) }}" method="administracion">
    <br>
    <br>
    
    @method('PUT')
    @include('dashboard.administracion._form')
</form>
@endsection