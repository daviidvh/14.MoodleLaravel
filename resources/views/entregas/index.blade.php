@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Entregas de la Asignatura: {{ $asignatura->nombre }}</h1>
        <div class="list-group">
            @forelse ($entregas as $entrega)
                <a href="{{ route('entrega.show', $entrega->id) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $entrega->nombre }}</h5>
                    <small>Fecha de entrega: {{ $entrega->vencimiento }}</small>
                </a>
            @empty
                <p>No hay entregas para esta asignatura.</p>
            @endforelse
        </div>
    </div>
@endsection
