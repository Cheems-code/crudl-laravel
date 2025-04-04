@extends('layouts.app')

@section('content')
<h2>Mis Contactos</h2>

<a href="{{ route('contactos.create') }}" class="btn btn-primary mb-3">Nuevo Contacto</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contactos as $contacto)
        <tr>
            <td>{{ $contacto->nombre }}</td>
            <td>{{ $contacto->telefono }}</td>
            <td>{{ $contacto->email }}</td>
            <td>
                <a href="{{ route('contactos.edit', $contacto) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('contactos.destroy', $contacto) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar contacto?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
