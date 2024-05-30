@extends('layout')

@section('title', 'Detalles de Mascota')

@section('content')
<div class="container mt-5">
    <h1>Detalles de Mascota</h1>
    <ul class="list-group">
        <li class="list-group-item">Nombre: {{ $pet->name }}</li>
        <li class="list-group-item">Tipo: {{ $pet->type }}</li>
        <li class="list-group-item">Raza: {{ $pet->breed }}</li>
        <li class="list-group-item">Edad: {{ $pet->age }}</li>
    </ul>
    <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-primary mt-3">Editar</a>
    <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" class="mt-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
@endsection
