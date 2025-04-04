@extends('layouts.app')

@section('content')
<h2>Agregar Contacto</h2>

<form action="{{ route('contactos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label>Teléfono:</label>
        <input type="text" name="telefono" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('contactos.index') }}" class="btn btn-secondary">Volver</a>
</form>
@endsection
