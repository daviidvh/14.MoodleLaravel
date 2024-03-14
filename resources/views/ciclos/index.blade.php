<!-- resources/views/ciclos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Ciclos</h1>
        @foreach ($ciclos as $ciclo)
        <a href="{{ route('asignaturas.por-ciclo', $ciclo->id) }}" class="ciclo-link">
            <div class="ciclo">
                <h3>{{ $ciclo->nombre }}</h3>
                <p>{{ $ciclo->descripcion }}</p>
            </div>
        </a>
    @endforeach




    
    
    </div>
@endsection
