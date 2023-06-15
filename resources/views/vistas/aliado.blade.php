<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aliado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Aliado</h1>
        <div class="text-center mt-5">
            <a href="{{ url('/cursos') }}" class="btn btn-primary">Cursos</a>
            <a href="{{ url('/generos') }}" class="btn btn-primary">Genero</a>
            <a href="{{ url('/blogs') }}" class="btn btn-primary">Blog</a>
            <a href="{{ url('/noticias') }}" class="btn btn-primary">Noticias</a>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>