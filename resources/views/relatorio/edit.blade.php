@extends('layouts.app')

@section('content')

<h1>Editar Relatorio</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li style="color: red;">
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('relatorio.update', $relatorio->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="tipo">Tipo:</label>
    <input 
        type="text" 
        id="tipo" 
        name="tipo" 
        value="{{ old('tipo', $relatorio->tipo) }}" 
        required
    >

    <label for="periodo">Periodo:</label>
    <input 
        type="number" 
        id="periodo" 
        name="periodo" 
        value="{{ old('periodo', $relatorio->periodo) }}" 
        required
    >

    <label for="data_geracao">Data de Geração:</label>

<input 
    type="date" 
    id="data_geracao" 
    name="data_geracao" 
    value="{{ old('data_geracao', $relatorio->data_geracao) }}" 
    required
>

    <button type="submit">Salvar Alterações</button>

    <a href="{{ route('relatorio.index') }}">Cancelar</a>

</form>

@endsection