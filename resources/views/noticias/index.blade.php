<?php
    /** @var \App\Models\Noticia[] | \Illuminate\Database\Eloquent\Collection $noticias */
?>

@extends('layouts.main')
@section('title','Listado de Noticias')
@section('main')

    <h1>Listado de noticias</h1>

    @auth()
    <div class="mb-3">
        <a href="{{url('noticias/nueva')}}">Agregar una nueva noticia</a>
    </div>
    @endauth

    @if($noticias->isNotEmpty())

        @foreach ($noticias as $noticia)
        <div class="card mb-3 contenedor">
            <div class="p-2">
                <h2 class="card-title">{{$noticia->noticia_id}} - {{$noticia->titulo}}</h2>
                <div>
                    @forelse($noticia->generos as $genero)
                        <span class="badge bg-info">{{$genero->nombre}}</span>
                    @empty
                        <p class="badge bg-info">No especificado</p>
                    @endforelse
                </div>
                <p class="card-text">{{$noticia->copete}}</p>
                <p class="card-text"><strong>Mes y año del evento: </strong>{{$noticia -> fecha_evento}}</p>
                <p class="card-text"><strong>Localidad: </strong>{{$noticia -> localidad->nombre}}</p>
                <p class="card-text"><strong>País: </strong>{{$noticia -> localidad->pais}}</p>
                    <div class="d-flex">
                        <a href="{{ route('noticias.ver', ['id' => $noticia->noticia_id]) }}" class="btn btn-outline-primary mx-1">Ver</a>

                        @auth()
                        <a href="{{ route('noticias.editar.form', ['id' => $noticia->noticia_id]) }}" class="btn btn-outline-secondary mx-1">Editar</a>

                        <form action="{{route('noticias.eliminar',['id'=>$noticia->noticia_id])}}" method="post" class="mx-1">
                            @csrf
                            <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                        </form>
                        @endauth
                    </div>
            </div>
        </div>
        @endforeach

    @else
        <p>No hay noticias que mostrar</p>
    @endif

@endsection
