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

                    <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="fichero">
                        <input type="hidden" name="entrega_id" value="{{ $entrega->id }}">

                        <button class="btn btn-primary" type="submit">Subir fichero</button>
                   </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ficheros disponibles</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <table id="example1" class="table">
                            <thead>
                                
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Usuario</th>
                                <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            <tr>
                                <td>{{ $file->id }}</td>
                                <td>{{ $file->nombre }}</td>
                                <td>{{ $file->user_id }}</td>
                                <td>
                                    <form method="POST" action="{{ route('files.destroy', $file->id) }}" id="formularioEliminar">
                                        @csrf 
                                        @method('delete')
                                        <input class ="btn btn-danger"type="submit" value="Eliminar">                                        
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
