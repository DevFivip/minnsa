<head>
    <meta charset="UTF-8">
    <base href="/">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/dPctOHA2ifhWm5WzFM_B5TjT/recaptcha__es.js" crossorigin="anonymous" integrity="sha384-q1Ox7Pqw7n5oxn5HADE89r7AOe5n0GJhRnm9pQq4Ri8mK356vX3sckjG3nFROhtr"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-5SG0KRSQDH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-5SG0KRSQDH');
    </script>
    <meta name="robots" content="noindex">
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

<body>
    <div class="app" id="japp">
        <style>
            .aFrmLoginIconHelp {
                font-size: 1.2rem;
                padding: 0.4rem 0.2rem 0;
                cursor: pointer;
                color: #9c9c9c;
            }
        </style>
        <div class="aContainer" style="top: 0px;">
            <div class="text-center">
                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/logo-minsa-opt.jpg" alt="Logo Minsa" width="220" style="max-width: 15rem; width: 100%; border: #fff solid 1px">
            </div>
            <div class="aLogo">
                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/logo-carnet-opt.png" class="aLogoImg" alt="Logo Carnet Vacunación">
            </div>
            <div class="aBody" id="jaBody">
                <form action="" method="post" id="frmLogin">
                    <div class="aFrmContainer aAnimationOpacityShow">
                        <div class="aFrmHeader text-center" style="font-size:1.5em; padding:0; color: rgb(1, 135, 129)">
                            <b>Ingrese los Datos Solicitados</b>
                        </div>

                        <div class="aFrmBody">
                            <div class="row">
                                <div class="col-6">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="jaFrmRegVacLstTipoDoc"><b>Tipo Documento</b></label>
                                        <select id="jaFrmRegVacLstTipoDoc">
                                            <option value="1">DOCUMENTO NACIONAL DE IDENTIDAD</option>
                                            <option value="2">CARNET DE EXTRANJERÍA</option>
                                            <option value="3">PASAPORTE</option>
                                            <option value="4">DOCUMENTO DE IDENTIDAD EXTRANJERO</option>
                                            <option value="5">SIN DOCUMENTO (CÓDIGO TEMPORAL)</option>
                                            <option value="7">PERMISO TEMPORAL PERMANENCIA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="jaFrmRegVacTxtNumDoc"><b>Número de Documento</b></label>
                                        <div style="display: flex;">
                                            <input type="text" id="jaFrmRegVacTxtNumDoc" maxlength="8">
                                            <div class="aFrmLoginIconHelp jaFrmXTDoc" title="¿Qué es?" data-type="1">
                                                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/question-solid.png" alt="Icono Pregunta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="txtFechaNacimiento"> <b>Fecha de Nacimiento</b> <span>(dd/mm/yyyy)</span></label>
                                        <input type="text" id="txtFechaNacimiento" placeholder="dd/mm/yyyy" maxlength="10" lang="es" min="1900-01-01" max="2021-01-01">
                                    </div>
                                </div>
                                <div class="col-6 jaFrmXTDoc">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="txtFechaEmision"><b>Fecha de Emisión</b> <span>(dd/mm/yyyy)</span></label>
                                        <div style="display: flex;">
                                            <input type="text" id="txtFechaEmision" placeholder="dd/mm/yyyy" maxlength="10" lang="es" min="1900-01-01" max="2022-01-01">
                                            <div class="aFrmLoginIconHelp jaFrmXTDoc" title="¿Qué es?" data-type="3">
                                                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/question-solid.png" alt="Icono Pregunta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="display:none">
                                <div class="col-6 jaFrmXTDoc">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="txtCodigoVerificacion"> <b>Código de Verificación</b></label>
                                        <div style="display: flex;">
                                            <input type="number" id="txtCodigoVerificacion" value="1">
                                            <div class="aFrmLoginIconHelp jaFrmXTDoc" title="¿Qué es?" data-type="4">
                                                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/question-solid.png" alt="Icono Pregunta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                </div>
                            </div>
                            <hr class="aLine1">

                            <!--  <hr class="aLine1"/>-->
                            <div class="row checkboxLabels">
                                <div class="col-12">
                                    <input type="checkbox" id="chkPolitica" style="float:left; margin-right: 0.5rem">
                                    <label style="font-size: 1rem; display:block; padding-top: 0.4rem;">
                                        Acepto el <span id="chkPolitica2" style="font-size: 1rem; color:#1eb7ca; cursor: pointer"> tratamiento de mis datos personales y haber leído la Política de privacidad </span>
                                    </label>
                                </div>
                            </div>

                            <hr class="aLine1">

                            <div class="row">
                                <div class="col-12">
                                    <div id="html_captcha" align="center">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcuApQdAAAAACr26JEbJyP-4TRNVasOT5U5bBlq&amp;co=aHR0cHM6Ly9jYXJuZXR2YWN1bmFjaW9uLm1pbnNhLmdvYi5wZTo0NDM.&amp;hl=es&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=f19px0v2oypn" width="304" height="78" role="presentation" name="a-bwarepswr2rj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div>
                                </div>
                            </div>


                            <hr class="aLine1">

                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4" style="padding-top:15px">
                                    <button class="btn btn1 btnEff" id="btnEntrar" type="button">
                                        <img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/angle-double-right-solid.png" alt="Icono Iniciar Sesión" style="vertical-align: sub">
                                        INICIAR SESIÓN
                                    </button>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4" style="padding-top:10px">
                                    <div class="text-center" style="font-size: 1.3em;color: rgb(1, 135, 129); padding:0 0 0.2rem 0">¿Cuentas con tu código QR?</div>
                                    <button class="btn btn2 btnEff" id="btnVerificar" type="button">
                                        <img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/qrcode-solid.png" alt="Verificar" style="vertical-align: sub">
                                        VALIDAR QR
                                    </button>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                            <hr class="aLine1">
                            <div class="text-center" style="color:#6c6c6c">
                                Copyright © 2021. Desarrollado por la Oficina General de Tecnologías de la Información del Ministerio de Salud | Todos los derechos reservados.
                                <!--<a id="jaBtnReclamar" href="https://carnetvacunacion.minsa.gob.pe/" style="font-size:1rem">¿No puedes acceder al Carnet de Vacunación?</a>-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script nomodule="">
        document.location.href = 'error-compatibilidad.html';
    </script>


    <div id="aPreloadGeneral" style="width: 100%; height: 100%; z-index: 100; position: absolute; text-align: center; font-family: &quot;Lucida Sans&quot;, &quot;Lucida Sans Regular&quot;, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Geneva, Verdana, sans-serif; color: rgb(102, 102, 102); font-size: 14px; top: 0px; left: 0px; background-color: rgba(255, 255, 255, 0.6); display: none;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><img src="data:image/svg+xml;base64, PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBzdHlsZT0ibWFyZ2luOiBhdXRvOyBkaXNwbGF5OiBibG9jazsgc2hhcGUtcmVuZGVyaW5nOiBhdXRvOyIgd2lkdGg9IjEwMHB4IiBoZWlnaHQ9IjEwMHB4IiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pZFlNaWQiPgo8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSIwIiBmaWxsPSJub25lIiBzdHJva2U9IiM5M2RiZTkiIHN0cm9rZS13aWR0aD0iMiI+CiAgPGFuaW1hdGUgYXR0cmlidXRlTmFtZT0iciIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGR1cj0iMXMiIHZhbHVlcz0iMDs0MCIga2V5VGltZXM9IjA7MSIga2V5U3BsaW5lcz0iMCAwLjIgMC44IDEiIGNhbGNNb2RlPSJzcGxpbmUiIGJlZ2luPSItMC41cyI+PC9hbmltYXRlPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9Im9wYWNpdHkiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiBkdXI9IjFzIiB2YWx1ZXM9IjE7MCIga2V5VGltZXM9IjA7MSIga2V5U3BsaW5lcz0iMC4yIDAgMC44IDEiIGNhbGNNb2RlPSJzcGxpbmUiIGJlZ2luPSItMC41cyI+PC9hbmltYXRlPgo8L2NpcmNsZT4KPGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjNjg5Y2M1IiBzdHJva2Utd2lkdGg9IjIiPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InIiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiBkdXI9IjFzIiB2YWx1ZXM9IjA7NDAiIGtleVRpbWVzPSIwOzEiIGtleVNwbGluZXM9IjAgMC4yIDAuOCAxIiBjYWxjTW9kZT0ic3BsaW5lIj48L2FuaW1hdGU+CiAgPGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGR1cj0iMXMiIHZhbHVlcz0iMTswIiBrZXlUaW1lcz0iMDsxIiBrZXlTcGxpbmVzPSIwLjIgMCAwLjggMSIgY2FsY01vZGU9InNwbGluZSI+PC9hbmltYXRlPgo8L2NpcmNsZT4KPC9zdmc+" alt="Precarga">
            <div style="text-align: center;" id="aPreloadGeneralTxtAdd"></div>
        </div>
    </div>
    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
        <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
        <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
        <div style="z-index: 2000000000; position: relative;"><iframe title="El reCAPTCHA caduca dentro de dos minutos" src="https://www.google.com/recaptcha/api2/bframe?hl=es&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;k=6LcuApQdAAAAACr26JEbJyP-4TRNVasOT5U5bBlq" name="c-bwarepswr2rj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" style="width: 100%; height: 100%;"></iframe></div>
    </div>
</body>