@extends('layouts.app')



@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>Histórico</h1>
        <a href="{{ route('historicos.create') }}" class="btn btn-primary mb-3">Adicionar Histórico</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                    <th>Descrição</th>
                    <th>Data e Hora</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historicos as $historico)
                    <tr>
                        <td>{{ $historico->id }}</td>
                        <td>{{ $historico->descricao }}</td>
                        <td>{{ $historico->data_hora }}</td>
                        <td>
                            <a href="{{ route('historicos.show', $historico) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('historicos.edit', $historico) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('historicos.destroy', $historico) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este histórico?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  

