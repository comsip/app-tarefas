@extends('layouts.app')

@section('content')
<div class="card p-4" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ccc;">
    <h1>Editar Professor</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('relatorios.update', $relatorio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome" style="display: block; margin-top: 10px;">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $relatorio->nome) }}" required style="width: 100%; padding: 6px; margin-bottom: 10px;">

        <label for="email" style="display: block; margin-top: 10px;">E-mail:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $relatorio->email) }}" required style="width: 100%; padding: 6px; margin-bottom: 10px;">

        <label for="formacao" style="display: block; margin-top: 10px;">Formação:</label>
        <input type="text" name="formacao" id="formacao" value="{{ old('formacao', $relatorio->formacao) }}" style="width: 100%; padding: 6px; margin-bottom: 10px;">

        <button type="submit" style="padding: 8px 15px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Salvar Alterações</button>
        <a href="{{ route('relatorios.index') }}" style="margin-left: 10px;">Cancelar</a>
    </form>
</div>
@endsection