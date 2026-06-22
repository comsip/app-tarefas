<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prioridade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 text-dark">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-white">
                        <h4 class="mb-0">Editar Prioridade #{{ $prioridade->id }}</h4>
                    </div>
                    <div class="card-body">
                        <!-- A rota aponta para o método 'update' do Controller passando o ID -->
                        <form action="{{ route('prioridades.update', $prioridade->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- OBRIGATÓRIO NO LARAVEL: Diz para o formulário enviar como PUT para atualizar -->

                            <!-- Campo Nível já preenchido com o valor antigo -->
                            <div class="mb-3">
                                <label for="nivel" class="form-label fw-bold">Nível da Prioridade *</label>
                                <input type="text" class="form-control" id="nivel" name="nivel" value="{{ $prioridade->nivel }}" required>
                            </div>

                            <!-- Campo Descrição já preenchido com o valor antigo -->
                            <div class="mb-3">
                                <label for="descricao" class="form-label fw-bold">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $prioridade->descricao }}</textarea>
                            </div>

                            <div class="d-flex gap-2">
                                <a href="{{ route('prioridades.index') }}" class="btn btn-secondary w-50">Cancelar</a>
                                <button type="submit" class="btn btn-primary w-50">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
