@extends('layouts.app')

@section('content')
<h2>Editar Contacto</h2>

<form action="{{ route('contactos.update', $contacto) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $contacto->nombre }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $contacto->telefono }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" value="{{ $contacto->email }}" class="form-control">
    </div>
    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('contactos.index') }}" class="btn btn-secondary">Volver</a>
</form>
@endsection
