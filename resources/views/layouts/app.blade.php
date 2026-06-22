<!DOCTYPE html>
<html lang="pt-br">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestão de Comentários')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 2rem;
            background-color: #f8f8fa00;
        }
        .card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0);
            border-radius: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-center">Gerenciar Comentários</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
=======

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Gestão de Equipes')</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        @include('partials.messages')

        @yield('content')

    </div>

</body>

>>>>>>> beb5549a22f22ab23a94c2d283ca9c0abd466ad1
</html>