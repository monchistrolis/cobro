@extends('layouts.app')

@section('content')
    <!-- Tu mensaje aquí -->
    <div class="container">
      
        <div class="cuadroMensaje col-lg-12 col-md-12 col-sm12 col-12 ">
            <h1>Felicidades Tu Comentario esta Listo </h1>
            <div class="mensaje col-lg-8">
                Queremos expresar nuestro sincero agradecimiento por elegir Uber para sus necesidades de transporte. Valoramos su confianza en nuestros servicios y estamos comprometidos en brindarle un viaje seguro, cómodo y eficiente.            </div>
        </div>
    </div>


    <!-- Redirección a la página de inicio -->
    <script>
        setTimeout(function() {
                    window.location.href = "{{ route('index') }}";
                    }, 2000); // Redirige después de 3 segundos, puedes ajustar este valor según tus necesidades
    </script>
@endsection
