@extends('layouts.app')

@section('title', 'Listagem de Equipes')

@section('content')

<div class="card shadow p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Equipes registradas</h1>

        <a href="{{ route('equipes.create') }}"
           class="btn btn-primary">

            Registrar nova equipe

        </a>

    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                
                <th>Nome</th>
                <th>Ações</th>

            </tr>

        </thead>

        <tbody>

            @forelse($equipes as $equipe)

                <tr>

                    

                    <td>{{$equipe->nome}}</td>

                    <td>

                        <a href="{{ route('equipes.show', $equipe->id_equipe) }}"
                           class="btn btn-info btn-sm">

                            Ver

                        </a>

                        <a href="{{ route('equipes.edit', $equipe->id_equipe) }}"
                           class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <form action="{{ route('equipes.destroy', $equipe->id_equipe) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Tem certeza que deseja excluir esta equipe?');">

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

                        Nenhuma equipe cadastrada.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection