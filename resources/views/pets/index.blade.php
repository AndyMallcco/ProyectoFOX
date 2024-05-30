@extends('layout')

@section('title', 'Mascotas')

@section('content')
<div class="container mt-5">
    <h1>Mis Mascotas</h1>
    <a href="{{ route('pets.create') }}" class="btn btn-primary">Añadir Mascota</a>
    <ul class="list-group mt-3">
        @foreach($pets as $pet)
            <li class="list-group-item">
                <a href="{{ route('pets.show', $pet->id) }}">{{ $pet->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
