@extends('layout')

@section('title', 'Editar Mascota')

@section('content')
<div class="container mt-5">
    <h1>Editar Mascota</h1>
    <form action="{{ route('pets.update', $pet->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $pet->name }}" required>
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" name="type" class="form-control" id="type" value="{{ $pet->type }}" required>
        </div>
        <div class="form-group">
            <label for="breed">Raza:</label>
            <input type="text" name="breed" class="form-control" id="breed" value="{{ $pet->breed }}">
        </div>
        <div class="form-group">
            <label for="age">Edad:</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ $pet->age }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
