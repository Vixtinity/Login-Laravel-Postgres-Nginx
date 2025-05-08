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
    
@endif
    <title>Document</title>
</head>
<body>
     
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="/register" method="POST" enctype="multipart/form-data">         
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario:</label>
                        <input name="name" type="text" class="form-control" id="usuario" value="" required />
                        <div class="invalid-feedback">Intruce tu usuario.</div>
                    </div>      
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="email" value="" required placeholder="abc@gmail.com"/>
                        <div class="invalid-feedback">Introduce tu email.</div>
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Contraseña</label>
                        <input name="password" type="password" class="form-control" id="password" value="" required />
                        <div class="invalid-feedback">Introduce tu contraseña.</div>
                    </div>
                

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
                <p>¿Ya tienes una cuenta?<a href="/">Inicia sesión aqui</a></p>
                
                </form>
            
            <!------------------------------------------------------------------------------------------------------------------------------------->
            <footer class="">
                <div class="wrapper">
                    <div class="content">
                    </div>
                    <footer class="bg-primary text-white text-center py-3">
                        Copyright © 2020. All rights reserved.
                    </footer>
                </div>
                
            <!------------------------------------------------------------------------------------------------------------------------------------->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>