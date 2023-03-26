@extends('dashboard.master')
@section('contenido')
@extends('dashboard.partials.validation-error')

<form action="{{ route('category.store') }}" method="POST">
    <br>
    <br>
    <div class="row">
        <div class="form-group">
            <label for="name">Articulo</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label for="description">Contenido</label>
            <input type="text" name="description" id="description" value="{{ $category->description }}" readonly>
        </div>
    </div>
</form>
@endsection