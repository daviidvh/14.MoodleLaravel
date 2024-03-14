@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Detalles de la Entrega') }}</div>

                    <div class="card-body">
                        <h5>{{ $entrega->nombre }}</h5>
                        <p>Fecha de vencimiento: {{ $entrega->vencimiento }}</p>
                        <p>Nombre del archivo: {{ $entrega->archivo }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
