@extends('layouts.app')

@section('content')
<h2>Iniciar Sesión</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form action="{{ route('login.post') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Contraseña:</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary">Entrar</button>
    <a href="{{ route('register') }}" class="btn btn-link">Registrarse</a>
</form>
@endsection
