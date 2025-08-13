<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
            <div class="text-center">
                <h1 class="display-5 mb-3">Bem-vindo ao Meu Projeto CRUD!</h1>
                <p class="lead mb-4">Faça login para acessar o sistema.</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg w-100 mb-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg w-100">Registrar</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
