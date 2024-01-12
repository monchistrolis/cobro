<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Datos</title>
</head>

<body>
    <div class="presentacion col-lg-12 col-md-10 col-sm-12 col-12">
        <div class="foto">
            <img class="fotoPerfil" src="{{ asset('images/perfill.webp') }}" alt="">
        </div>
        <div class="tituloPresentacion">
            <h2>
                Hola Soy Ramón 
            </h2>
        </div>
        <div class="cuerpoPresentacion ">
            <p class="presentacionCuerpo">

                Tu conductor de confianza en esta ruta. En mi auto, tu traslado es más que solo un
                viaje. Garantizo seguridad, comodidad y un servicio personalizado. ¡Viajemos juntos! 🚗
                #TuUberDeConfianza
            </p>
        </div>

    </div>
    <div class="tarjeta col-lg-12 col-md-12 col-sm-12 col-12 ">
        <div class="titulo">
            <h1> Mis Datos</h1>
        </div>
        <div class="cuerpo">
            <div class="cuerpo">
                <div class="row datos">
                    <p> Ramon Aguilera</p>
                    <p> 19.342.759-6</p>
                    <p> Banco Chile</p>
                    <p> Cuenta Vista</p>
                    <p> 00-001-97183-48</p>
                    <p> ramon.agui.san96@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="btnCopiar">
            <button class="btnCopiar" onclick="copiarDatos()">Copiar Datos</button>

        </div>
    </div>

    {{-- scrips --}}

    <script>
        function copiarDatos() {
            // Selecciona el contenido de la div con la clase "cuerpo"
            var contenido = document.querySelector('.cuerpo');
            var seleccion = window.getSelection();
            var rango = document.createRange();
            rango.selectNodeContents(contenido);
            seleccion.removeAllRanges();
            seleccion.addRange(rango);

            // Intenta copiar el contenido seleccionado
            try {
                document.execCommand('copy');
                alert('Datos copiados exitosamente');
            } catch (err) {
                console.error('Error al intentar copiar los datos:', err);
                alert('Error al intentar copiar los datos');
            }

            // Limpia la selección
            seleccion.removeAllRanges();
        }
    </script>

</body>

</html>
