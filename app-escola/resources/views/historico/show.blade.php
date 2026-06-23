<!DOCTYPE html>
<html>
    <head>
        <title>Detalhes do Histórico</title>
    </head>
    <body>
        <div class="container">
            <h1>Detalhes do Histórico</h1>
            <p><strong>ID:</strong> {{ $historico->id }}</p>
            <p><strong>Descrição:</strong> {{ $historico->descricao }}</p>
            <p><strong>Data e Hora:</strong> {{ $historico->data_hora }}</p>
            <a href="{{ route('historicos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </body>
</html>