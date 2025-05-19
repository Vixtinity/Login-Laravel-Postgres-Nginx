<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Iniciar sesión</title>
</head>
<body>

    <div class="container-fluid h-custom d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-8 col-lg-6 col-xl-4">
            @if(session('mensajeError'))
    <div class="alert alert-danger">
        {{ session('mensajeError') }}
    </div>
@endif

            <form action="{{ route('login') }}" method="POST">
    @csrf

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" name="loginemail" required placeholder="abc@gmail.com"
               value="{{ old('loginemail') }}" />
        <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="loginpassword" required />
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
        </div>
    </div>
        <p>¿No tienes una cuenta?<a href="/">Crea aqui</a></p>
    <!-- Submit button -->
    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
    <!-- Register buttons -->
    <div class="text-center">
    </div>
</form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
