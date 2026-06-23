@extends('layouts.app')

@section('content')

<h1>Relatorio</h1>

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
                {{ $relatorio->nome }} ({{ $relatorio->matricula }})
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