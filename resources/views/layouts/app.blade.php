<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Atividades</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f7f9fc;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Controle de Atividades
            </a>

            <div class="d-flex gap-2">

                <a href="{{ route('status.index') }}"
                   class="btn {{ request()->is('status*') ? 'btn-warning' : 'btn-light' }}">
                    Status
                </a>

            </div>
        </div>
    </nav>

    <!-- CONTEÚDO -->
    <div class="container mb-5">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>