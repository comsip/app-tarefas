<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
        }

        .card{
            background:#fff;
            padding:40px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
            text-align:center;
        }

        h1{
            color:#0d6efd;
        }

        a{
            display:inline-block;
            margin:10px;
            padding:12px 20px;
            text-decoration:none;
            color:#fff;
            background:#0d6efd;
            border-radius:5px;
        }

        a:hover{
            background:#0b5ed7;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Sistema de Gerenciamento Escolar</h1>

    <p>Escolha um módulo:</p>

    <a href="{{ route('alunos.index') }}">Alunos</a>
    <a href="{{ route('professores.index') }}">Professores</a>
    <a href="{{ route('salas.index') }}">Salas</a>
    <a href="{{ route('projetos.index') }}">Projetos</a>
</div>

</body>
</html>