<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Prioridade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">Detalhes da Prioridade #{{ $prioridade->id }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="fw-bold text-muted">Nível:</label>
                            <h5 class="text-uppercase text-dark">{{ $prioridade->nivel }}</h5>
                        </div>
                        <div class="mb-4">
                            <label class="fw-bold text-muted">Descrição:</label>
                            <p class="bg-light p-3 rounded border text-dark">{{ $prioridade->descricao ?? 'Nenhuma descrição informada.' }}</p>
                        </div>
                        <a href="{{ route('prioridades.index') }}" class="btn btn-secondary w-100">Voltar para a Listagem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
