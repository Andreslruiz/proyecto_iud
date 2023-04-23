<x-app-layout>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Assets/CSS/estilos.css">
        <title>Biblioteca Web</title>
    </head>
    <body>
        <div class="container text-center p-2">
            <div id="centralImage" style="background: url(https://s1.1zoom.me/b5050/499/Many_Book_Library_468620_1600x1200.jpg)" class="jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h1 class="display-4 font-weight-bold">Administración de empresas</h1>
                    <p class="font-italic mb-0">La administración no tiene sueños, tiene un plan estrategico.</p>
                    <a href="{{ url('administracion') }}" role="button" class="btn btn-primary px-5">Ver Malla Curricular</a>
                </div>
            </div>
        </div>
    </body>
    <body>
        <div class="container text-center p-2">
            <div id="centralImage" style="background: url(https://images.unsplash.com/photo-1606922342331-061cbb448a23?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&w=1000&q=80)" class="jumbotron bg-cover text-white">
                <div class="container py-5 text-center">
                    <h1 class="display-4 font-weight-bold">Ingenieria de Software</h1>
                    <p class="font-italic mb-0">Caon la revolución tecnologica, el desarrollo ha llegado para cambiar el mundo.</p>
                    <a href="{{ url('desarrollo') }}" role="button" class="btn btn-primary px-5">Ver Malla Curricular</a>
                </div>
            </div>
        </div>
    </body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pagina de inicio - Cursos disponibles
        </h2>
    </x-slot>
</x-app-layout>

