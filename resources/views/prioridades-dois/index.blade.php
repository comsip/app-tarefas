<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Prioridades Dois</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light mt-5">

    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Nova Prioridade</h5>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('prioridades-dois.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nivel" class="form-label">Nível da Prioridade</label>
                                <input type="text" name="nivel" id="nivel" class="form-control" required placeholder="Ex: Alta, Média, Baixa">
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea name="descricao" id="descricao" class="form-control" rows="3" placeholder="Opcional"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Salvar Prioridade</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Lista de Prioridades</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nível</th>
                                    <th>Descrição</th>
                                    <th text-align="center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($prioridades as $p)
                                    <tr>
                                        <td>
    <a href="{{ route('prioridades-dois.edit', $p->id) }}" class="btn btn-warning btn-sm me-1">Editar</a>

    <form action="{{ route('prioridades-dois.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
    </form>
</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Nenhuma prioridade cadastrada ainda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
