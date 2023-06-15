<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Empresa</h1>
        <div class="text-center mt-5">
            <a href="{{ url('/eventos') }}" class="btn btn-primary">Eventos</a>
            <a href="{{ url('/responsabilidadsociales') }}" class="btn btn-primary">Responsabilidad Social</a>
            <a href="{{ url('/informacionempresas') }}" class="btn btn-primary">Información Empresa</a>
            <a href="{{ url('/empleos') }}" class="btn btn-primary">Empleos</a>
            <a href="{{ url('/postulantes') }}" class="btn btn-primary">Postulante</a>
            <a href="{{ url('/clientecursos') }}" class="btn btn-primary">Cliente Curso</a>
            <a href="{{ url('/servicios') }}" class="btn btn-primary">Servicios</a>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>