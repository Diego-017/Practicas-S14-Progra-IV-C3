<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Catálogo</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; padding: 20px; }
            .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 16px rgba(0,0,0,0.08); }
            table { width: 100%; border-collapse: collapse; margin-top: 16px; }
            th, td { padding: 12px 14px; border: 1px solid #ddd; text-align: left; }
            th { background: #f0f0f0; }
            h1 { margin: 0; font-size: 1.5rem; }
            p { margin: 0; color: #555; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Catálogo de productos</h1>
            <p>Datos ordenados a partir del arreglo asociativo recibido.</p>

            @if (!empty($productos) && is_array($productos))
                <table>
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $clave => $producto)
                            <tr>
                                <td>{{ $clave }}</td>
                                <td>{{ $producto['nombre'] }}</td>
                                <td>${{ number_format($producto['precio'], 2) }}</td>
                                <td>{{ $producto['categoria'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay productos para mostrar.</p>
            @endif
        </div>
    </body>
</html>