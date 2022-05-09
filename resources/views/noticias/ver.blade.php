<?php
/**  @var \App\Models\Noticia $noticia */
?>

@extends('layouts.main')

@section('title',$noticia ->titulo)

@section('main')
<div class="card">

    @if($noticia->poster != '' && file_exists(public_path('imgs/' . $noticia->poster)))
        <?php
        [$w, $h, $t, $attrs] = getimagesize(public_path('imgs/' . $noticia->poster) );
        ?>
        <img
            src="{{ url('imgs/' . $noticia->poster) }}"
            alt="Poster de {{ $noticia->titulo }}" {!! $attrs !!}
            class="mx-auto d-block pt-2"
        >
    @endif
    <div class="card-body">
        <div class="p-2">
            <h2 class="card-title">{{$noticia ->titulo}}</h2>
                <p class="card-text">@forelse($noticia->generos as $genero)
                        <span class="badge bg-info">{{$genero->nombre}}</span>
                    @empty
                        Sin género definido.
                    @endforelse</p>
                <p class="card-text">{{$noticia->copete}}</p>
                <p class="card-text h5">{{$noticia -> desarrollo}}</p>
                <p class="card-text"><strong>Mes y Año Evento:</strong> {{$noticia -> fecha_evento}}</p>
                <p class="card-text"><strong>Localidad:</strong> {{$noticia -> localidad -> nombre}}</p>


            <div class="mb-3">
                <p class="card-text h4">Ticket Disponibles</p>
                <div class="container">
                    <div class="row">
                @foreach($noticia->tickets as $ticket)

                            <div class="card mr-1 col-3">
                                <div class="card-body">
                                    <p class="card-text h5">{{$ticket->nombre}}</p>
                                    <p class="card-text"><em>$ </em>{{$ticket->precio}}</p>
                                    <p class="card-text"><em>Fecha: </em>{{$ticket->fecha}}</p>
                                    <button class="btn btn-outline-info">Comprar</button>
                                </div>
                            </div>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
