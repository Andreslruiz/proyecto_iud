@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')

<form action="{{ route('category.update', $category->id) }}" method="POST">
    <br>
    <br>
    @method('PUT')
    @include('dashboard.category._form')
</form>
@endsection