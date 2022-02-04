<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Puedes verificar la aplicación de tu vacuna contra el coronavirus u otras que hayas recibido recientemente en el Carné de vacunación web del Ministerio de Salud. Aquí, está registrada la fecha y lugar donde se te inmunizó, además del tipo de vacuna que recibiste, el fabricante de la vacuna y el número de lote.">
    <meta name="keywords" content="Carnet Vacunas, Minsa, Covid19">
    <meta name="author" content="Minsa Perú">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>MINSA - Carnet Vacunación</title>
    <link rel="apple-touch-icon" sizes="57x57" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/favicon.ico">
    <link rel="manifest" href="https://carnetvacunacion.minsa.gob.pe/static/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#b7e3e4">
    <meta name="msapplication-TileImage" content="https://carnetvacunacion.minsa.gob.pe/static/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#b7e3e4">
    <link id="app-template" rel="stylesheet" href="https://carnetvacunacion.minsa.gob.pe/static/css/app20211210.min.css">
    <!-- <link rel="stylesheet" href="css/app.css"> -->
</head>

<body>
    <div class="app" id="japp">
        <div class="aContainer">
            <div class="text-center">
                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/logo-minsa-opt.jpg" alt="Logo Minsa" width="220" style="max-width: 15rem; width: 100%; border: #fff solid 1px">
            </div>
            <div class="aLogo">
                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/logo-carnet-opt.png" class="aLogoImg" alt="Logo Carnet de Vacunación - MINSA">
            </div>

            @if(!$status || !$persona)
            <div class="text-center" style="padding:2rem 0.5rem">
                <div><img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/cancelar.png"></div>
                <div style="font-size:1.2rem; padding:0.5rem; background: rgba(255,255,255, 0.7);">
                    Ocurrió un error al intentar consultar los datos.
                </div>
            </div>
            @endif


            @if(!!$status && !!$persona)
            <div class="text-center" style="padding:2rem 0.5rem">
                <div><img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/comprobado.png"></div>
                <div style="font-size:1.2rem; padding:0.5rem; background: rgba(255,255,255, 0.7); line-height: 2rem; color: #1f484a;">
                    <div>{{strtoupper($persona['apellidos'])}} {{strtoupper($persona['nombres'])}}</div>
                    <div> <b>{{strtoupper($persona['tipo_documento'])}}</b> {{ substr($persona['num_documento'], 0, 2).'XXXX'.substr($persona['num_documento'], 6) }}</div>
                    <div style="color:#3e8d5e"><b>CON SEGUNDA DOSIS *</b></div>
                </div>
            </div>


            <div style="padding: 0.7rem 0 0.5rem; text-align: center;">
                <div style="font-size: 1rem;padding:0.5rem;background: rgba(255,255,255, 0.7);">* Persona con dos dosis de vacuna contra COVID 19</div>
            </div>

            @endif


            <hr class="aLine1">
            <div class="text-center" style="color:#6c6c6c">
                Copyright © 2021. Desarrollado por la Oficina General de Tecnologías de la Información del Ministerio de Salud | Todos los derechos reservados.
            </div>
        </div>
    </div>
    <script type="module" src="1642695847333app/index.js"></script>
    <script nomodule="">
        document.location.href = 'error-compatibilidad.html';
    </script>


</body>

</html>