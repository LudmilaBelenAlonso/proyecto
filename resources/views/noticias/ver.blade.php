<?php
/**  @var \App\Models\Noticia $noticia */
?>

@extends('layouts.main')

@section('title',$noticia ->titulo)

@section('main')

    <h1 class="mb-3">{{$noticia ->titulo}}</h1>

    @if($noticia->poster != '' && file_exists(public_path('imgs/' . $noticia->poster)))
        <?php
        [$w, $h, $t, $attrs] = getimagesize(public_path('imgs/' . $noticia->poster) );
        ?>
        <img
            src="{{ url('imgs/' . $noticia->poster) }}"
            alt="Poster de {{ $noticia->titulo }}" {!! $attrs !!}
        >
    @endif
    <dl>
        <dt>Géneros</dt>
        <dd>@forelse($noticia->generos as $genero)
                <span class="badge bg-secondary">{{$genero->nombre}}</span>
            @empty
                Sin género definido.
            @endforelse</dd>
        <dd>{{$noticia->copete}}</dd>
        <dt>Desarrollo</dt>
        <dd>{{$noticia -> desarrollo}}</dd>
        <dt>Fecha Evento</dt>
        <dd>{{$noticia -> fecha_evento}}</dd>
        <dt>Localidad</dt>
        <dd>{{$noticia -> localidad -> nombre}}</dd>

    </dl>
    <div class="mb-3">
        <legend>Tickets disponibles</legend>
        @foreach($noticia->tickets as $ticket)
            <span class="badge">{{$ticket->nombre}}</span>
            <button>{{$ticket->nombre}}</button>
        @endforeach
    </div>





@endsection
