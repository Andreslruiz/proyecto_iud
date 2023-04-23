@extends('dashboard.master')
@section('titulo', 'desarrollo')
@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Desarrollo de Software</h2>
            @if(Auth::user()->name != 'estudiante')
            <a href="{{ url('desarrollo/create') }}" class="btn btn-primary btn-sm">Agregar Materia</a>
            @endif
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
                    Materia
                </td>
                <td>
                    Docente
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
            @foreach($categories as $desarrollo)
            <tr>
                <td>
                    {{ $desarrollo->id }}
                </td>
                <td>
                    {{ $desarrollo->name }}
                </td>
                <td>
                    {{ $desarrollo->description }}
                </td>
                <td>
                    {{ $desarrollo->created_at->format('d-m-y') }}
                </td>
                <td>
                    {{ $desarrollo->updated_at->format('d-m-y') }}
                </td>
                <td>
                    @if(Auth::user()->name == 'estudiante')
                    <a href="{{ route('desarrollo.show', $desarrollo->id) }}" class="btn btn-primary">Ver</a>
                    @else
                    <a href="{{ route('desarrollo.edit', $desarrollo->id) }}" class="btn btn-primary">Actualizar</a>
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $desarrollo->id }}" class="btn btn-danger">Eliminar</button>
                    @endif
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
                    <p>Seguro desea eliminar esta materia ?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close-modal">Cerrar</button>
                <form id="formDelete" method="administracion" action="{{ route('desarrollo.destroy', 0) }}"
                data-action="{{ route('desarrollo.destroy', 0) }}">
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
                modal.find('.modal-title').text('Vas a borrar la materia numero: ' + id)
            });
        };
    </script>
@endsection