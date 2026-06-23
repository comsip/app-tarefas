@extends('layouts.app')

@section('title', 'Novo Prazo')

@section('content')

<div class="card p-4">

    <h4 class="mb-3">Cadastrar Novo Prazo</h4>

    @if($errors->any())

        <div class="alert alert-danger">

            <strong>Ops!</strong>
            Verifique os erros abaixo:

            <ul>

                @foreach($errors->all() as $erro)

                    <li>{{ $erro }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('prazos.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label for="data_limite" class="form-label">
                Data Limite
            </label>

            <input type="date"
                   name="data_limite"
                   class="form-control @error('data_limite') is-invalid @enderror"
                   id="data_limite"
                   value="{{ old('data_limite') }}"
                   required>

            @error('data_limite')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>

            @enderror

        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="{{ route('prazos.index') }}"
           class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

@endsection