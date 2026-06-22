<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Editar Histórico</h1>
        <form action="{{ route('historicos.update', $historico) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $historico->descricao }}" required>
            </div>
            <div class="form-group">
                <label for="data_hora">Data e Hora:</label>
<input
        type="datetime-local"
        name="data_hora"
        value="{{ $historico->data_hora }}">            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('historicos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>