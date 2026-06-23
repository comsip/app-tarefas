@extends('layouts.app')

@section('content')

<h1>Lista de Relatorios</h1>

<a href="{{ route('relatorio.create') }}">Novo Relatorio</a>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<ul>
    @foreach($relatorios as $relatorio)
        <li>
            <a href="{{ route('relatorio.show', $relatorio->id) }}">
                {{ $relatorio->tipo }} ({{ $relatorio->periodo }})
            </a>

            <form action="{{ route('relatorio.destroy', $relatorio->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este relatorio?')">
                    Excluir
                </button>
            </form>
        </li>
    @endforeach
</ul>

@endsection