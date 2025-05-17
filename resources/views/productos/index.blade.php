<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
</head>
<body>
    <h1>productos</h1>
    <br>
    
    <br>

    <table border ="1">
        <thead>
            <tr>
                <th>nombre</th>
                <th>marca</th>
                <th>precio</th>
                <th>descripcion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->marca }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>