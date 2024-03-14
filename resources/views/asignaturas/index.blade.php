<!-- resources/views/asignaturas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Asignaturas</h1>
        @foreach ($asignaturas as $asignatura)
            <a href="{{ route('entregas.index', $asignatura->id) }}" class="card-link">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $asignatura->nombre }}</h5>
                        <p class="card-text">{{ $asignatura->descripcion }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
