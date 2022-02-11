@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Listado') }}</div>
                <div class="card-body">
                    <form action="{{route('persona.update',$persona->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombres" class="form-control" value="{{$persona->nombres}}">
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value="{{$persona->apellidos}}">
                        </div>

                        <div class="form-group">
                            <label for="tipo">Sexo</label>
                            <select name="sexo" class="form-control">
                                @foreach($sexos as $v => $sexo)
                                <option @if ($persona->sexo== $v)
                                    selected
                                    @endif
                                    value="{{$v}}">{{$sexo}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tipo">Tipo de Documento</label>
                            <select name="tipo_documento" class="form-control">

                                @foreach($documentos as $v => $documento)
                                <option @if ($persona->tipo_documento== $v)
                                    selected
                                    @endif
                                    value="{{$v}}">{{$documento}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="numero">Numero de Documento</label>
                            <input type="number" name="num_documento" class="form-control" value="{{$persona->num_documento}}">
                        </div>

                        <div class="form-group">
                            <label for="numero">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" onchange="change_fecha_nacimiento(this.value)" class="form-control" value="{{$fecha_n}}">
                        </div>
                        <div class="form-group">
                            <label for="numero">Fecha de VACUNACION</label>
                            <input type="date" name="fecha_vacunacion" class="form-control" value="{{$fecha_v}}">
                            <div style="border-color: black;" class="form-text"> SUGERENCIA DE FECHA DE VACUNACION = <span id="sugerencia"></span> </div>
                        </div>

                        <div class="form-group">
                            <label for="numero">Sition de Vacunacio</label>
                            <select name="sitio_vacunacion" class="form-control">

                                @foreach($lugares as $v => $lugar)
                                <option @if ($persona->sitio_vacunacion == $v)
                                    selected
                                    @endif
                                    value="{{$v}}">{{$lugar}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="numero">Nacionalidad</label>
                            <input type="text" name="nacionalidad" value="VENEZOLANA" class="form-control">
                        </div>

                        <br><br>

                        <input type="submit" value="Guardar" class="btn btn-primary">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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