@extends('layouts.app')

@section('content')
<h2>Registro</h2>

@if($errors->any())
    <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form action="{{ route('register.post') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Contraseña:</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>
    <button class="btn btn-success">Registrarse</button>
    <a href="{{ route('login') }}" class="btn btn-link">Iniciar Sesión</a>
</form>
@endsection
