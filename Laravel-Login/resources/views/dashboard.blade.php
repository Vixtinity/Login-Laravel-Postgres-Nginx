<h1>Bienvenido, {{ auth()->user()->name }}</h1>
<form action="/salir" method="POST">
    @csrf
    <button>Log out</button>
    </form>