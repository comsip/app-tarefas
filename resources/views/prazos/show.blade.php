@extends('layouts.app')

@section('title', 'Detalhes do Prazo')

@section('content')

<div class="card p-4">

    <h4 class="mb-3">Detalhes do Prazo</h4>

    <div class="mb-3">
        <label class="form-label fw-bold">
            Data limite:
        </label>

        <p>
            {{ \Carbon\Carbon::parse($prazo->data_limite)->format('d/m/Y') }}
        </p>
    </div>

    <a href="{{ route('prazos.index') }}" class="btn btn-secondary">
        Voltar
    </a>

    <a href="{{ route('prazos.edit', $prazo->id_prazo) }}" class="btn btn-primary">
        Editar
    </a>

</div>

@endsection