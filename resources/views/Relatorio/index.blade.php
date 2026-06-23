@extends('layouts.app')

@section('content')
<div class="card p-4" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ccc;">
    <h1>Lista de Relatórios</h1>
    <a href="{{ route('relatorios.create') }}" class="btn btn-primary" style="margin-bottom: 15px; display: inline-block;">Novo Relatório</a>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <ul style="padding-left: 20px;">
        @foreach ($relatorios as $relatorio)
            <li style="margin-bottom: 10px;">
                <a href="{{ route('relatorios.show', $relatorio->id) }}">{{ $relatorio->nome }}</a>
                | <a href="{{ route('relatorios.edit', $relatorio->id) }}" style="color: orange;">Editar</a>
                | <form action="{{ route('relatorios.destroy', $relatorio->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este relatório?')" style="background: none; border: none; color: red; cursor: pointer; padding: 0;">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection