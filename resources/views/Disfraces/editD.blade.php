@extends('layouts.appD')
@section('titulo', 'Editar Disfraces')
@section('contenido')
    <h1>Editar Disfraz</h1>
    <form action="{{ route('Disfraces.update', $disfraces) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre del disfraz</label>
            <input type="text" name="nombre" class="form-control" value="{{ $disfraces->nombre }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Talla</label>
            <textarea name="talla" class="form-control" rows="3">{{$disfraces->talla }}</textarea>
        </div>
        <a href="{{ route('Disfraces.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
