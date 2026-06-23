@extends('layouts.app')
 
@section('title', 'Editar Equipe')
 
@section('content')
 
<div class="card p-4">
    <h4 class="mb-3">Editar Projeto</h4>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Houve um problema ao salvar os dados:
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('projetos.update', $projeto->id_projeto) }}" method="POST">
        @csrf
        @method('PUT')
 
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" value="{{ old('nome', $projeto->nome) }}" required>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
 
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="descricao" name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao" value="{{ old('descricao', $projeto->descricao) }}" required>
            @error('descricao')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
 
       
 
    
 
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('projetos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection