<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prioridade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light mt-5">
    <div class="container" style="max-width: 500px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Editar Prioridade #{{ $prioridade->id }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('prioridades-dois.update', $prioridade->id) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="mb-3">
                        <label for="nivel" class="form-label">Nível da Prioridade</label>
                        <input type="text" name="nivel" id="nivel" class="form-control" value="{{ $prioridade->nivel }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="3">{{ $prioridade->descricao }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('prioridades-dois.index') }}" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-success">Atualizar Dados</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
