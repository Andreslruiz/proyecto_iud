@extends('dashboard.master')
@section('titulo', 'Poster')
@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Post Publicados</h2>
            <a href="{{ url('post/create') }}" class="btn btn-primary btn-sm">Crear Post</a>
        </div>
    </main>
    <br>
    <table class="table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Descripción
                </td>
                <td>
                    Estado Publicación
                </td>
                <td>
                    Creación
                </td>
                <td>
                    Actualización
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>
                    {{ $post->id }}
                </td>
                <td>
                    {{ $post->name }}
                </td>
                <td>
                    {{ $post->description }}
                </td>
                <td>
                    {{ $post->posted }}
                </td>
                <td>
                    {{ $post->created_at->format('d-m-y') }}
                </td>
                <td>
                    {{ $post->updated_at->format('d-m-y') }}
                </td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Actualizar</a>
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seguro desea eliminar este POST ?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close-modal">Cerrar</button>
                <form id="formDelete" method="POST" action="{{ route('post.destroy', 0) }}"
                data-action="{{ route('post.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){
            $('#deleteModal').on('show.bs.modal', function (event){
                var button = $(event.relatedTarget)
                var id = button.data('id')
                action = $('#formDelete').attr('data-action').slice(0,-1)
                action += id
                $('#formDelete').attr('action', action)
                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar el POST numero: ' + id)
            });
        };
    </script>
@endsection