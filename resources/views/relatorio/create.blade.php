@extends('layouts.app')

@section('content')

<h1>Cadastrar Novo Relatorio</h1>

@if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('relatorio.store') }}" method="POST">
    @csrf

    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" id="tipo" value="{{ old('tipo') }}" required>

    <label for="periodo">Periodo:</label>
    <input type="number" name="periodo" id="periodo" value="{{ old('periodo') }}" required>

    <div class="mb-3">
            <label for="data_geracao" class="form-label">Data de Geração</label>
            <input type="date" name="data_geracao" class="form-control @error('data_geracao') is-invalid @enderror" id="data_geracao" value="{{ old('data_geracao') }}" required>
            @error('data_geracao')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


    <button type="submit">Salvar</button>

    <a href="{{ route('relatorio.index') }}">Cancelar</a>
</form>

@endsection