<?php
/**@var \App\Models\Localidad[]|\Illuminate\Database\Elocuent\Collection $localidades
 * @var \App\Models\Genero[]|\Illuminate\Database\Eloquent\Collection $generos
 * @var \App\Models\Noticia $noticia
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>
@extends('layouts.main')
@section('title','Editar la noticia: ' . $noticia->titulo)
@section('main')

    <h1 class="mb-4">Editar {{ $noticia ->titulo }}</h1>

    <p>Editá los datos que necesites en esta noticia desde el form indicando los nuevo valores</p>

    @if($errors->any())
        <div class="alert alert-danger">Hay errores en los campos del formulario. Verificar y corregir los errores, luego volver a intentar guardar los cambios.</div>
    @endif
    <form action="{{ route('noticias.editar.grabar', ['id'=> $noticia->noticia_id]) }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('titulo') aria-describedby="error-titulo" @enderror
                value="{{ old('titulo', $noticia->titulo) }}">
            @error('titulo')
            <div class="text-danger" id="error-titulo">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="localidad_id" class="form-label">Localidad</label>
            <select name="localidad_id" id="localidad_id" class="form-control">
                <option value="">Elegí la localidad del evento</option>
                @foreach($localidades as $localidad)
                    <option value="{{$localidad->localidad_id}}"
                            @selected($localidad->localidad_id == old('localidad_id', $noticia->localidad_id))
                        >{{$localidad->nombre}}</option>
                @endforeach
            </select>
        <div class="mb-3">
            <label for="copete" class="form-label">Resumen</label>
            <textarea
                id="copete"
                name="copete"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('copete') aria-describedby="error-copete" @enderror>
                {{ old('copete', $noticia->desarrollo) }}
            </textarea>
            @error('desarrollo')
            <div class="text-danger" id="error-desarrollo">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="desarrollo" class="form-label">Desarrollo</label>
            <textarea
                id="desarrollo"
                name="desarrollo"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('desarrollo') aria-describedby="error-desarrollo" @enderror>
                {{ old('desarrollo', $noticia->desarrollo) }}
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
                value="{{ old('fecha_evento', $noticia->fecha_evento) }}">
            @error('fecha_evento')
            <div class="text-danger" id="error-fecha_evento">{{$message}}</div>
            @enderror
        </div>

        @if($noticia->poster != '' && file_exists(public_path('imgs/' . $noticia->poster)))
        <?php
        [$w, $h, $t, $attrs] = getimagesize(public_path('imgs/' . $noticia->poster) );
        ?>
        <div class="mb-3">
            <p>Poster actual</p>
            <img src="{{ url('imgs/' . $noticia->poster) }}" alt="Poster de {{ $noticia->titulo }}" {!! $attrs !!}>
        </div>
        @endif

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
                        class="form-check-input"
                        @checked(in_array($genero->genero_id, old('genero_id', $noticia->generos->pluck('genero_id')->all())))
                    >
                    <label
                        for="genero_id-{{$genero->genero_id}}"
                        class="form-check-label">
                        {{$genero->nombre}}
                    </label>
                </div>
            @endforeach
        </fieldset>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
