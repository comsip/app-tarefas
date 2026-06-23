@extends('layouts.app')

@section('title', 'Editar Equipe')

@section('content')

<div class="card p-4">

    <h4 class="mb-3">Editar Equipe</h4>

    @if($errors->any())

        <div class="alert alert-danger">

            <strong>Erro!</strong> Houve um problema ao salvar os dados:

            <ul>

                @foreach($errors->all() as $erro)

                    <li>{{ $erro }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('equipes.update', $equipe->id_equipe) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label for="nome" class="form-label">
                Nome completo
            </label>

            <input type="text"
                   name="nome"
                   id="nome"
                   value="{{ old('nome', $equipe->nome) }}"
                   class="form-control @error('nome') is-invalid @enderror"
                   required>

            @error('nome')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

            @enderror

        </div>


        <button type="submit"
                class="btn btn-success">

            Atualizar

        </button>

        <a href="{{ route('equipes.index') }}"
           class="btn btn-secondary">

            Cancelar

        </a>

    </form>

</div>

@endsection