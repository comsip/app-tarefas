@extends('layouts.app')

@section('title', 'Detalhes da Equipe')

@section('content')

<div class="card p-4">

    <h4 class="mb-3">Detalhes da Equipe</h4>

    <div class="mb-3">

        <label class="form-label fw-bold">
            Nome:
        </label>

        <p>{{ $equipe->nome }}</p>

    </div>


    <a href="{{ route('equipes.index') }}"
       class="btn btn-secondary">

        Voltar

    </a>

    <a href="{{ route('equipes.edit', $equipe->id_equipe) }}"
       class="btn btn-primary">

        Editar

    </a>

</div>

@endsection