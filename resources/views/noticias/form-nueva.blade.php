<?php
/** @var \App\Models\Localidad[]|\Illuminate\Database\Elocuent\Collection $localidades
 *  @var \App\Models\Genero[]|\Illuminate\Database\Eloquent\Collection $generos
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>
@extends('layouts.main')
@section('title','Agregar nueva noticia')
@section('main')

    <h1 class="mb-4">Agregar Nueva Noticia</h1>

    <p>Completar el formulario para agregar la noticia que se desea publicar</p>
    @if($errors->any())
        <div class="alert alert-danger">Hay errores en los campos del formulario. Verificar y corregir los errores, luego volver a intentar guardar los cambios.</div>
    @endif
    <form action="{{ route('noticias.crear.grabar') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('titulo') aria-describedby="error-titulo" @enderror
                value="{{ old('titulo') }}">
            @error('titulo')
                <div class="alert-danger" id="error-titulo">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="localidad_id" class="form-label">Localidad</label>
            <select name="localidad_id" id="localidad_id" class="form-control">
                <option value="">Elegí la localidad del evento</option>
                @foreach($localidades as $localidad)
                    <option value="{{$localidad->localidad_id}}"
                    @selected($localidad->localidad_id == old('localidad_id'))
                        >{{$localidad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="copete" class="form-label">Resumen</label>
            <textarea
                id="copete"
                name="copete"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('copete') aria-describedby="error-copete" @enderror
                value="{{ old('copete') }}">
            </textarea>
            @error('copete')
                <div class="text-danger" id="error-desarrollo">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="desarrollo" class="form-label">Desarrollo</label>
            <textarea
                id="desarrollo"
                name="desarrollo"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('desarrollo') aria-describedby="error-desarrollo" @enderror
                value="{{ old('desarrollo') }}">
            </textarea>
            @error('desarrollo')
                <div class="text-danger" id="error-desarrollo">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fecha_evento" class="form-label">Mes y año del Evento</label>
            <input
                type="text"
                id="fecha_evento"
                name="fecha_evento"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('fecha_evento') aria-describedby="error-fecha_evento" @enderror
                value="{{ old('fecha_evento') }}">
            @error('fecha_evento')
                <div class="text-danger" id="error-fecha_evento">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Poster</label>
            <input type="file" id="poster" name="poster" class="form-control">
        </div>

        <fieldset class="mb-3">
            <legend>Géneros</legend>
            @foreach($generos as $genero)
            <div class="form-check form-check-inline">
                <input
                    type="checkbox"
                    name="genero_id[]"
                    id="genero_id-{{$genero->genero_id}}"
                    value="{{$genero->genero_id}}"
                    class="form-check-input">
                <label
                    for="genero_id-{{$genero->genero_id}}"
                    class="form-check-label">
                    {{$genero->nombre}}
                </label>
            </div>
            @endforeach
        </fieldset>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
