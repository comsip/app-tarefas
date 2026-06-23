@extends('layouts.app')

@section('title', 'Editar Comentario')

@section('content')
<div class="card p-4">
    <h4 class="mb-3">Editar Comentario</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Houve um problema ao salvar os dados:
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comentarios.update', $comentario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>
            <input type="text" name="texto" class="form-control @error('texto') is-invalid @enderror" id="texto" value="{{ old('texto', $comentario->texto) }}" required>
            @error('texto')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="data_hora" class="form-label">Data e Hora</label>
            <input type="datetime-local" name="data_hora" class="form-control @error('data_hora') is-invalid @enderror" id="data_hora" value="{{ old('data_hora', $comentario->data_hora) }}" required>
            @error('data_hora')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('comentarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection