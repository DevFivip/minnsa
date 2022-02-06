<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2><a href="/persona/create">Crear Nuevo</a></h2>


    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>TIPO DOCUMENTO</td>
                <td>NUMERO DOCUMENTO</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
            <tr>
                <td>{{$persona->id}}</td>
                <td>{{$persona->nombres}}</td>
                <td>{{$persona->apellidos}}</td>
                <td>{{$persona->tipo_documento}}</td>
                <td>{{$persona->num_documento}}</td>
                <td><a href="/get/{{$persona->id}}">CARNET 📄</a></td>
                <td><a href="/publico/certificado/index?Tk={{$persona->qr}}">Ver Resultados</a></td>
                <td><a href="#eliminar" onclick="eliminar({{$persona->id}})">🗑️ Eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        window.CSRF_TOKEN = '{{ csrf_token() }}';


        async function eliminar(id) {
            if (confirm("¿Seguro deseas Eliminar?") == true) {
                const res = await fetch('persona/' + id, {
                    method: 'DELETE',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": window.CSRF_TOKEN
                    },
                })
                location.reload()
            }
        }
    </script>


</body>

</html>