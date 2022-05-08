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
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Resumen</th>
            <th>Mes y año Evento</th>
            <th>Lugar del Evento</th>
            <th>País del Evento</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($noticias as $noticia)
        <tr>
            <td>{{$noticia->noticia_id}}</td>
            <td>{{$noticia->titulo}}</td>
            <td>
                @forelse($noticia->generos as $genero)
                    <span class="badge bg-secondary">{{$genero->nombre}}</span>
                @empty
                    <p class="badge bg-secondary">No especificado</p>
                @endforelse
            </td>
            <td>{{$noticia->copete}}</td>
            <td>{{$noticia -> fecha_evento}}</td>
            <td>{{$noticia -> localidad->nombre}}</td>
            <td>{{$noticia -> localidad->pais}}</td>

            <td>
                <div class="d-flex">
                    <a href="{{ route('noticias.ver', ['id' => $noticia->noticia_id]) }}" class="btn btn-primary mx-1">Ver</a>

                    @auth()
                    <a href="{{ route('noticias.editar.form', ['id' => $noticia->noticia_id]) }}" class="btn btn-secondary mx-1">Editar</a>

                    <form action="{{route('noticias.eliminar',['id'=>$noticia->noticia_id])}}" method="post" class="mx-1">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                    @endauth
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay noticias que mostrar</p>
    @endif

@endsection
