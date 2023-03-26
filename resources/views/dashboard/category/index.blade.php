@extends('dashboard.master')
@section('titulo', 'Category')
@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Categorias Creadas</h2>
            <a href="{{ url('category/create') }}" class="btn btn-primary btn-sm">Crear Categoria</a>
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
            @foreach($categories as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    {{ $category->description }}
                </td>
                <td>
                    {{ $category->created_at->format('d-m-y') }}
                </td>
                <td>
                    {{ $category->updated_at->format('d-m-y') }}
                </td>
                <td>
                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Actualizar</a>
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $category->id }}" class="btn btn-danger">Eliminar</button>
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
                    <p>Seguro desea eliminar esta categoria ?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close-modal">Cerrar</button>
                <form id="formDelete" method="POST" action="{{ route('category.destroy', 0) }}"
                data-action="{{ route('category.destroy', 0) }}">
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
                modal.find('.modal-title').text('Vas a borrar la categoria numero: ' + id)
            });
        };
    </script>
@endsection