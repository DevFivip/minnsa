<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('persona.store')}}" method="POST">
        @csrf
        <label for="nombres">nombres</label>
        <br>
        <input type="text" name="nombres">
        <br>

        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos">
        <br>

        <label for="tipo">Tipo de Documento</label>
        <br>
        <input type="text" name="tipo_documento">
        <br>

        <label for="numero">Numero de Documento</label>
        <br>
        <input type="number" name="num_documento">
        <br>
        <br>
        <input type="submit" value="GUARDAR">

    </form>



</body>

</html>