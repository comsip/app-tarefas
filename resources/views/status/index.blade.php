<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Status</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">📊 Status</h2>

        <a href="{{ route('status.create') }}" class="btn btn-primary">
            + Novo Status
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($status as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->nome }}</td>
                            <td>

                                <a href="{{ route('status.show', $s->id) }}"
                                   class="btn btn-sm btn-info text-white">
                                    Ver
                                </a>

                                <a href="{{ route('status.edit', $s->id) }}"
                                   class="btn btn-sm btn-warning text-white">
                                    Editar
                                </a>

                                <form action="{{ route('status.destroy', $s->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Tem certeza que deseja excluir?')">
                                        Excluir
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                Nenhum status cadastrado
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>