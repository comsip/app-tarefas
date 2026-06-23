@extends('layouts.app')

@section('content')

<h1>Detalhes do Relatorio</h1>

<p><strong>Tipo:</strong> {{ $relatorios->tipo }}</p>

<p><strong>Periodo:</strong> {{ $relatorios->periodo }}</p>

<p><strong>Data de Geração:</strong> {{ $relatorios->data_geracao }}</p>

<a href="{{ route('relatorio.index') }}">Voltar para a lista</a>

@endsection