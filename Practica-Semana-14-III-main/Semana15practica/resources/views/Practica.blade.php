<DOYCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    <h1>Hola, esta es la practica de Laravel</h1>
    <p>Esta es una vista de ejemplo para mostrar las variables pasadas desde el controlador.</p>    
    <h2>Variables recibidas:</h2>
    <ul>
        <li><strong>Nombre:</strong> {{ $nombre }}</li>
        <li><strong>Fecha de nacimiento:</strong> {{ $fechaNacimiento }}</li>
        <li><strong>Comidas favoritas:</strong> {{ implode(', ', $comidasFavoritas) }}</li>
    </ul>
</body>
</html>