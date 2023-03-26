@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')

<form action="{{ route('post.update', $post->id) }}" method="POST">
    <br>
    <br>
    @method('PUT')
    @include('dashboard.post._form')
</form>
@endsection