@extends('layouts.app')
@section('content')
    <div>
        <div class="tarjeta col-lg-5 col-md-10 col-sm-10 col-10 ">
            <div class="titulo">
                <h1>Datos Bancarios</h1>
            </div>
            <div class="cuerpo">
                <div class="row datos">
                    <p class="col-md-6">Ramon Aguilera</p>
                    <p class="col-md-6">19.342.759-6</p>
                    <p class="col-md-6">Banco Chile</p>
                    <p class="col-md-6">Cuenta Vista</p>
                    <p class="col-md-6">00-001-97183-48</p>
                    <p class="col-md-6">ramon.agui.san96@gmail.com</p>
                </div>
            </div>
            
            <div class="btnCopia">
                <button class="btnCopiar btn btn-primary " onclick="copiarDatos()">Copiar Datos</button>
                <br>
                <div class="contMsnOculto">
                    <span id="mensajeCopiado" class="mensajeOculto mt-2">¡Datos copiados!</span>
                </div>
            </div>
        </div>
        <div class="tarjeta col-lg-6 col-md-10 col-sm-10 col-10 ">
            <div class="titulo">
                <h1>Datos Bancarios</h1>
            </div>
            <div class="cuerpo2">
                <div class="row datos2">
                    <p class="col-md-6">Ramon Aguilera</p>
                    <p class="col-md-6">19.342.759-6</p>
                    <p class="col-md-6">TAPP Caja Los Andes
                    </p>
                    <p class="col-md-6">Cuenta Vista</p>
                    <p class="col-md-6">19342759</p>
                    <p class="col-md-6">ramon.agui.san96@gmail.com</p>
                </div>
            </div>
            
            <div class="btnCopia">
                <button class="btnCopiar btn btn-primary " onclick="copiarDatos2()">Copiar Datos</button>
                <br>
                <div class="contMsnOculto">
                    <span id="mensajeCopiado2" class="mensajeOculto2 mt-2">¡Datos copiados!</span>
                </div>
            </div>
        </div>
    </div>
    <div class="contVolver">
        <a class="volver " href="{{ route('index') }}">Volver</a>
    </div>

    <script>
        function copiarDatos() {
            var datosCopiados = document.querySelector('.cuerpo .datos').innerText;

            // Crear un área de texto temporal
            var tempInput = document.createElement('textarea');
            tempInput.value = datosCopiados;
            document.body.appendChild(tempInput);

            // Seleccionar y copiar el texto
            tempInput.select();
            document.execCommand('copy');

            // Eliminar el área de texto temporal
            document.body.removeChild(tempInput);

            // Muestra el mensaje suavemente
            var mensajeCopiado = document.getElementById("mensajeCopiado");
            mensajeCopiado.classList.add("mostrarMensaje");

            // Oculta el mensaje después de unos segundos (por ejemplo, 3 segundos)
            setTimeout(function() {
                mensajeCopiado.classList.remove("mostrarMensaje");
            }, 3000);
        }
        // Asegúrate de que el mensaje esté oculto inicialmente
        document.addEventListener("DOMContentLoaded", function() {
            var mensajeCopiado = document.getElementById("mensajeCopiado");
            mensajeCopiado.classList.remove("mostrarMensaje");
        });

        // datos 2
        function copiarDatos2() {
            var datosCopiados = document.querySelector('.cuerpo2 .datos2').innerText;

            // Crear un área de texto temporal
            var tempInput = document.createElement('textarea');
            tempInput.value = datosCopiados;
            document.body.appendChild(tempInput);

            // Seleccionar y copiar el texto
            tempInput.select();
            document.execCommand('copy');

            // Eliminar el área de texto temporal
            document.body.removeChild(tempInput);

            // Muestra el mensaje suavemente
            var mensajeCopiado = document.getElementById("mensajeCopiado2");
            mensajeCopiado.classList.add("mostrarMensaje2");

            // Oculta el mensaje después de unos segundos (por ejemplo, 3 segundos)
            setTimeout(function() {
                mensajeCopiado.classList.remove("mostrarMensaje2");
            }, 3000);
        }

        // Asegúrate de que el mensaje esté oculto inicialmente
        document.addEventListener("DOMContentLoaded", function() {
            var mensajeCopiado = document.getElementById("mensajeCopiado2");
            mensajeCopiado.classList.remove("mostrarMensaje");
        });
    </script>

