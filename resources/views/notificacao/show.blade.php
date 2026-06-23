<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notificação</title>
</head>
<body>

    <h2>Detalhes da Notificação</h2>

    <p><strong>ID:</strong> {{ $notificacao->id_notificacao }}</p>

    <p><strong>Mensagem:</strong> {{ $notificacao->mensagem }}</p>

    <p><strong>Data de Envio:</strong> {{ $notificacao->data_envio }}</p>

    <p><strong>Lida:</strong>
        {{ $notificacao->lida ? 'Sim' : 'Não' }}
    </p>

    <a href="/notificacoes">
        Voltar
    </a>

</body>
</html>