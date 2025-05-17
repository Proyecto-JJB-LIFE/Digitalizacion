<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTES</title>
</head>
<body>
    <h1>clientes</h1>
    <br>
    
    <br>

    <table border ="1">
        <thead>
            <tr>
                <th>nombres</th>
                <th>pri_ape</th>
                <th>seg_ape</th>
                <th>doc_tip</th>
                <th>doc_num</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->pri_ape }}</td>
                <td>{{ $cliente->seg_ape }}</td>
                <td>{{ $cliente->doc_tip }}</td>
                <td>{{ $cliente->doc_num }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>