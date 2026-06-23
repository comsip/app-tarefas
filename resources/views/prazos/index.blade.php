@extends('layouts.app')

@section('title', 'Lista de Prazos')

@section('content')

<div class="card p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h4 class="mb-0">
            Lista de Prazos
        </h4>

        <a href="{{ route('prazos.create') }}"
           class="btn btn-success">

           + Novo Prazo

        </a>

    </div>

    <table class="table table-striped">

        <thead class="table-dark">

            <tr>
                <th>Data Limite</th>
                <th>id</th>
                <th>Ações</th>
            </tr>

        </thead>

        <tbody>

            @forelse($prazos as $prazo)

                <tr>

                    <td>{{ $prazo->data_limite }}</td>

                    <td>{{ $prazo->id_prazo }}</td>

                    <td>

                        <a href="{{ route('prazos.show', $prazo->id_prazo) }}"
                           class="btn btn-info btn-sm">

                           Ver

                        </a>

                        <a href="{{ route('prazos.edit', $prazo->id_prazo) }}"
                           class="btn btn-warning btn-sm">

                           Editar

                        </a>

                        <form action="{{ route('prazos.destroy', $prazo->id_prazo) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Tem certeza que deseja excluir este prazo?');">

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
                        Nenhum prazo confirmado.
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection