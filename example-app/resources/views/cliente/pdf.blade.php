<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style></style>
</head>

<body>
    <h1>CLIENTES</h1>
    <table >
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Nit</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->apellidos }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->nit }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>