@extends('layouts.app')

@section('title', 'Detalhes do Comentario')

@section('content')
<div class="card p-4">
    <h4 class="mb-3">Detalhes do Comentario</h4>

    <div class="mb-3">
        <label class="form-label fw-bold">Texto:</label>
        <p>{{ $comentario->texto }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Data:</label>
        <p>{{ \Carbon\Carbon::parse($comentario->data_hora)->format('d/m/Y H:i') }}</p>
    </div>
    

    <div class="mt-4">
        <a href="{{ route('comentarios.index') }}" class="btn btn-secondary">Voltar</a>
        <a href="{{ route('comentarios.edit', $comentario->id) }}" class="btn btn-primary">Editar</a>
    </div>
</div>
@endsection