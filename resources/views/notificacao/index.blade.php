<!DOCTYPE html>
<html>
<head>
    <title>Notificações</title>
</head>
<body>

<h2>Notificações</h2>

@foreach($notificacoes as $notificacao)

@if(!$notificacao->lida)

<div class="alert alert-info alert-dismissible fade show shadow-sm mb-2">

    <strong>Notificação:</strong>
    {{ $notificacao->mensagem }}

    <br>

    <small class="text-muted">
        {{ $notificacao->data_envio }}
    </small>

    <a href="{{ route('notificacao.show', $notificacao->id_notificacao) }}">
        Ver
    </a>

</div>

@endif

@endforeach

</body>
</html>