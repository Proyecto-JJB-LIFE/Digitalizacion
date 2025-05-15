<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto clinica</title>
</head>
    <body>
        <h1>Mis proyectos</h1>
        <br>
        <pre>
            <form action="{{route('ecuacion.store')}}" method="POST">
                @csrf
                <div>
                    <label for="">Valor de A:</label>
                    <input type="text" name ="a" autocomplete="off">
                </div>
                <div>
                    <label for="">Valor de B:</label>
                    <input type="text" name ="b" autocapitalize="off">
                </div>
                <div>
                    <button type="sudmit">Guardar</button>
                </div>
            </form>
        </pre>
        <br>

        <pre>
            <h1>Respuesta: {{$respuesta}}</h1>
        </pre>
    </body>
</html>