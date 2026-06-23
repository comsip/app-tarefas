@extends('layouts.app')
 
@section('title', 'Novo Projeto')
 
@section('content')
 
<div class="card p-4">
 
    <h4>Novo Projeto</h4>
 
    <form action="{{ route('projetos.store') }}" method="POST">
        @csrf
 
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
 
        <div class="mb-3">
            <label>Descrição</label>
            <input type="descricao" name="descricao" class="form-control">
        </div>
 
       
        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('projetos.index') }}" class="btn btn-secondary">Voltar</a>
 
    </form>
 
</div>
 
@endsection