<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pagina de inicio - Proyecto MVC
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Estas logueado!!!
                </div>
                <div class="p-6">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="{{ url('post') }}">Gestionar Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="{{ url('category') }}">Gestionar Categorias</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
