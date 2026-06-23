@extends('layouts.app')

@section('content')
<div class="card p-4" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ccc;">
    <h1>Detalhes do Relatório</h1>
    
    <p><strong>Nome:</strong> {{ $relatorio->nome }}</p>
    <p><strong>Email:</strong> {{ $relatorio->email }}</p>
    <p><strong>Formação:</strong> {{ $relatorio->formacao ?? 'Não informada' }}</p>

    <hr style="margin: 20px 0;">
    
    <a href="{{ route('relatorios.edit', $relatorio->id) }}" style="color: orange; font-weight: bold; text-decoration: none;">Editar</a> | 
    <a href="{{ route('relatorios.index') }}" style="text-decoration: none;">Voltar para a lista</a>
</div>
@endsection