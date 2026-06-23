@extends('layouts.app')

@section('title', 'Editar Prazo')

@section('content')

<div class="card p-4">

    <h4 class="mb-3">Editar Prazo</h4>

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

    <form action="{{ route('prazos.update', $prazo->id_prazo) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="data_limite" class="form-label">
                Data Limite
            </label>

            <input
                type="date"
                name="data_limite"
                class="form-control @error('data_limite') is-invalid @enderror"
                id="data_limite"
                value="{{ old('data_limite', $prazo->data_limite) }}"
                required
            >

            @error('data_limite')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Atualizar
        </button>

        <a href="{{ route('prazos.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

@endsection