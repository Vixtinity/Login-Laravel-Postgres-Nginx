<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/home.css'])
@else
    <style>
        
    </style>
@endif
@if(auth()->check())
    
@else
    <title>Document</title>
    <body>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="/" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="loginemail" required placeholder="abc@gmail.com"/>
                            <div class="invalid-feedback">Introduce tu email.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="loginpassword" required />
                            <div class="invalid-feedback">Introduce tu contraseña.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                    <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
                </div>
            </div>
        </div>


            
            <!------------------------------------------------------------------------------------------------------------------------------------->
            <footer class="">
                <div class="wrapper">
                    <div class="content">
                        <!-- Aquí va todo el contenido de la página -->
                    </div>
                    <footer class="bg-primary text-white text-center py-3">
                        Copyright © 2020. All rights reserved.
                    </footer>
                </div>
                
            <!------------------------------------------------------------------------------------------------------------------------------------->
        @endauth
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>