@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')

<form action="{{ route('desarrollo.update', $desarrollo->id) }}" method="administracion">
    <br>
    <br>
    @method('PUT')
    @include('dashboard.desarrollo._form')
</form>
@endsection