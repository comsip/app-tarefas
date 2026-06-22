@extends('layouts.app')

@section('title', 'Nova Equipe')

@section('content')

<div class="card p-4">

    <h4 class="mb-3">Cadastrar Nova Equipe</h4>

    @if($errors->any())

        <div class="alert alert-danger">

            <strong>Ops!</strong> Verifique os erros abaixo:

            <ul>

                @foreach($errors->all() as $erro)

                    <li>{{ $erro }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('equipes.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label for="nome" class="form-label">
                Nome completo
            </label>

            <input type="text"
                   name="nome"
                   id="nome"
                   value="{{ old('nome') }}"
                   class="form-control @error('nome') is-invalid @enderror"
                   required>

            @error('nome')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

            @enderror

        </div>


        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="{{ route('equipes.index') }}"
           class="btn btn-secondary">

            Cancelar

        </a>

    </form>

</div>

@endsection