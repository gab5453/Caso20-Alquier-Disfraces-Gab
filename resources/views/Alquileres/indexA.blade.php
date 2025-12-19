@extends('layouts.appD')
@section('titulo', 'Disfraces')
@section('contenido')
    <div class="d-flex justify-content-between mb-3">
        <h1>Disfraces</h1>
        <a href="{{ route('Disfraces.create') }}" class="btn
btn-primary">Nuevo</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>talla</t
            </tr>
            </thead>
            <tbody>
            @foreach($disfraz as $disfraces)
                <tr>
                    <td>{{ $disfraz->id }}</td>
                    <td>{{ $disfraz->nombre }}</td>
                    <td>{{ $disfraz->talla }}</td>
                    <td>
                        <a href="{{ route('Disfraces.edit', $disfraz) }}"
                           class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('Disfraces.destroy', $disfraz)
}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
