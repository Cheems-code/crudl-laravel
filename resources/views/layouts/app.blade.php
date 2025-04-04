<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        @auth
            <form action="{{ route('logout') }}" method="POST" class="mb-3 text-end">
                @csrf
                <button class="btn btn-danger">Cerrar sesión</button>
            </form>
        @endauth

        @yield('content')
    </div>
</body>
</html>
