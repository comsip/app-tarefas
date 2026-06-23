@extends('layouts.app')
 
@section('title', 'Detalhes do Projetos')
 
@section('content')
 
<div class="card p-4">
 
    <h4 class="mb-3">Detalhes do Projeto</h4>
 
    <p><strong>Nome:</strong> {{ $projeto->nome }}</p>
    <p><strong>Descrição:</strong> {{ $projeto->descricao }}</p>
   
 
    <a href="{{ route('projetos.index') }}" class="btn btn-secondary mt-3">
        Voltar
    </a>
 
</div>
 
@endsection
 