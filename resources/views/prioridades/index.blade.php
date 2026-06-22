<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Prioridades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10"> @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Cadastrar Nova Prioridade</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('prioridades.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nivel" class="form-label font-weight-bold">Nível da Prioridade *</label>
                                <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Ex: Alta, Média, Urgente" required>
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Opcional: explique o critério dessa prioridade..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Salvar Prioridade</button>
                        </form>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Prioridades Cadastradas</h4>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="25%">Nível</th>
                                    <th width="40%">Descrição</th>
                                    <th width="25%" class="text-center">Ações</th> </tr>
                            </thead>
                            <tbody>
                                @forelse($prioridades as $prioridade)
                                    <tr>
                                        <td>{{ $prioridade->id }}</td>
                                        <td><span class="badge bg-secondary text-uppercase">{{ $prioridade->nivel }}</span></td>
                                        <td>{{ $prioridade->descricao ?? 'Sem descrição' }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">

                                                <a href="{{ route('prioridades.show', $prioridade->id) }}" class="btn btn-sm btn-info text-white" title="Visualizar">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>

                                                <a href="{{ route('prioridades.edit', $prioridade->id) }}" class="btn btn-sm btn-warning text-white" title="Editar">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>

                                                <form action="{{ route('prioridades.destroy', $prioridade->id) }}" method="POST" onsubmit="return confirm('Tem certeza que quer deletar essa prioridade?')" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Deletar">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-3">
                                            Nenhuma prioridade cadastrada ainda.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
