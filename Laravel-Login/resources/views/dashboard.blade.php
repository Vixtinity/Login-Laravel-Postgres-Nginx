<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Document</title>
</head>
    <body>
        <div class="container mt-5 text-center">
            <h1 class="mb-4">Bienvenido, {{ auth()->user()->name }}</h1>
            
            <form action="/salir" method="POST">
                @csrf
                <button class="btn btn-danger">Cerrar sesión</button>
            </form>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>