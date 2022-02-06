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
        <label for="nombres">Nombres</label>
        <br>
        <input type="text" name="nombres">
        <br>
        <br>

        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos">
        <br>
        <br>


        <label for="tipo">Sexo</label>
        <br>
        <select name="sexo">
            <option value="M">MASCULINO </option>
            <option value="F">FEMENINO</option>
        </select>
        <br>
        <br>


        <label for="tipo">Tipo de Documento</label>
        <br>
        <select name="tipo_documento" id="">
            <option value="CI"> CEDULA</option>
            <option value="PASS"> PASAPORTE</option>
            <option value="DNI"> DNI</option>
            <option value="CPP"> CPP</option>
        </select>
        <br>
        <br>


        <label for="numero">Numero de Documento</label>
        <br>
        <input type="number" name="num_documento">
        <br>
        <br>

        <label for="numero">Fecha de Nacimiento</label>
        <br>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" onchange="change_fecha_nacimiento(this.value)">
        <br>
        <br>


        <label for="numero">Fecha de VACUNACION</label>
        <br>
        <input type="date" name="fecha_vacunacion">
        <span style="border-color: black;"> SUGERENCIA DE FECHA DE VACUNACION = <span id="sugerencia"></span> </span>

        <br>
        <br>

        <label for="numero">Sition de Vacunacio</label>
        <br>

        <select name="sitio_vacunacion">
            <option value="norte">LIMA NORTE </option>
            <option value="sur">LIMA SUR </option>
        </select>
        <br>
        <br>


        <label for="numero">Nacionalidad</label>
        <br>
        <input type="text" name="nacionalidad" value="VENEZOLANA">


        <br>
        <br>
        <input type="submit" value="GUARDAR">

    </form>


    <script>
        function change_fecha_nacimiento(e) {

            let edad = calcularEdad(e)
            let meses = ''

            if (edad >= 8 && edad <= 19) {
                meses = 'OCTUBRE-10 NOVIEMBRE-11 DICIEMBRE-12';
            } else if (edad >= 20 && edad <= 29) {
                meses = 'SEPTIEMBRE-09 OCTUBRE-10 NOVIEMBRE-11';
            } else if (edad >= 30 && edad <= 39) {
                meses = 'AGOSTO-08 SEPTIEMBRE-09 OCTUBRE-10';
            } else if (edad >= 40 && edad <= 49) {
                meses = 'JULIO-07 AGOSTO-08 SEPTIEMBRE-09';
            } else if (edad >= 50 && edad <= 59) {
                meses = 'JULIO-07 AGOSTO-08';
            } else if (edad >= 60 && edad <= 69) {
                meses = 'MAYO-05 JUNIO-06 JULIO-07';
            } else if (edad >= 70 && edad <= 79) {
                meses = 'ABRIL-04 MAYO-05';
            } else if (edad > 80) {
                meses = 'MARZO-03 ABRIL-04 MAYO-05'
            }

            console.log({
                meses
            })
            document.getElementById('sugerencia').innerHTML = meses;

        }

        function calcularEdad(fecha) {
            let hoy = new Date();
            let cumpleanos = new Date(fecha);
            let edad = hoy.getFullYear() - cumpleanos.getFullYear();
            let m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }

            return edad;
        }
    </script>


</body>

</html>