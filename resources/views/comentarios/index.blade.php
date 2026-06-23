@extends('layouts.app')

@section('title', 'Lista de Comentarios')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Lista de Comentarios</h4>
        <a href="{{ route('comentarios.create') }}" class="btn btn-success">+ Novo Comentario</a>
    </div>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Texto</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->texto }}</td>
                    <td>{{ \Carbon\Carbon::parse($comentario->data_hora)->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('comentarios.show', $comentario->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('comentarios.edit', $comentario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        
                        <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este comentario?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum comentario cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection