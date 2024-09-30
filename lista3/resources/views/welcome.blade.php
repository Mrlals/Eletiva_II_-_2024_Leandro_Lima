<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 1rem;
        }
        .card-body {
            padding: 2rem;
        }
        .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
        .card-title {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center">Lista de Exercícios 3</h5>
                @auth
                    <a href="/dashboard" class="btn btn-primary">
                        Acessar área restrita
                    </a>
                @else
                    <a href="/login" class="btn btn-primary">
                        Acessar o sistema
                    </a>
                    <a href="/register" class="btn btn-primary">
                        Crie sua conta
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
