@extends('layouts.appD')
@section('titulo', 'Nuevo Disfraces')
@section('contenido')
    <h1>Registrar Disfraz</h1>
    <form action="{{ route('Disfraces.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Id *</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre del disfraz</label>
            <input type="text" name="nombre-disfraz" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Talla</label>
            <textarea name="talla" class="form-control"
                      rows="3"></textarea>
        </div>
        <a href="{{ route('Disfraces.index') }}" class="btn
btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
