@extends('layouts.app')
 
@section('title', 'Lista de Projetos')
 
@section('content')
 
<div class="card p-4">
 
<div class="d-flex justify-content-between align-items-center mb-3">
 
    <h4 class="mb-0">Lista de Projetos</h4>
 
    <a href="{{ route('projetos.create') }}"
       class="btn btn-success">
        + Novo Projetos
    </a>
 
</div>
 
<table class="table table-striped">
 
    <thead class="table-dark">
 
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
 
    </thead>
 
    <tbody>
 
        @forelse($projetos as $projeto)
 
            <tr>
 
                <td>{{ $projeto->nome }}</td>
 
                <td>{{ $projeto->descricao }}</td>
 
              
 
                <td>
 
                    <a href="{{ route('projetos.show', $projeto->id_projeto) }}"
                       class="btn btn-info btn-sm">
                        Ver
                    </a>
 
                    <a href="{{ route('projetos.edit', $projeto->id_projeto) }}"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>
 
                    <form action="{{ route('projetos.destroy', $projeto->id_projeto) }}"
                          method="POST"
                          class="d-inline"
                          onsubmit="return confirm('Tem certeza que deseja excluir este projeto?');">
 
                        @csrf
                        @method('DELETE')
 
                        <button class="btn btn-danger btn-sm">
                            Excluir
                        </button>
 
                    </form>
 
                </td>
 
            </tr>
 
        @empty
 
            <tr>
 
                <td colspan="5" class="text-center">
                    Nenhum projeto cadastrado.
                </td>
 
            </tr>
 
        @endforelse
 
    </tbody>
 
</table>
 
</div>
 
@endsection
 