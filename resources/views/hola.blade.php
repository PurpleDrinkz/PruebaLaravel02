<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hola</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<h1> HOLA A TODOS <h1>
<p> Esto es una pagina html </p>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
        </tr>

    </thead>

    <tbody>

        @foreach($contactos as $contacto)
            <tr>

                    <td>{{ $contacto->nombre}}</td>
                    <td>{{ $contacto->telefono}}</td>
                    <td>{{ $contacto->correo}}</td>

            </tr>

        @endforeach


    </tbody>

</table>

</body>
</html>