@extends('layouts.app')
@section('content')
    <div class="presentacion col-lg-11 col-md-10 col-sm-10 col-10">
        <div class="foto">
            <img class="fotoPerfil" src="{{ asset('images/perfill.webp') }}" alt="">
        </div>
        <div class="tituloPresentacion">
            <h2>
                Hola Soy Ramón
            </h2>
        </div>
        <div class="cuerpoPresentacion col-lg-8 col-md-12 col-sm-12 col-12">
            <p class="presentacionCuerpo col-lg-12 col-md-12 col-sm-12 col-12">
                Tu conductor de confianza en esta ruta. En mi auto, tu traslado es más que solo un
                viaje. Garantizo seguridad, comodidad y un servicio personalizado. ¡Viajemos juntos! 🚗
                #TuUberDeConfianza
            </p>
        </div>
    </div>

    <div class="contTitulo col-lg-12 col-md-8 col-sm-10 col-10 mt-5">
        <h1 class="TituloIndex">Reglas del Auto</h1>
    </div>

    <div class="opciones">
        <div class=" row ">
            <div class=" contOps col-lg-6 col-md-12 col-sm-10 col-12">
                <div class="op1">
                    <div class="tituloOp1">
                        <h2>Fiscalizacion</h2>
                    </div>
                    <div class="contOp1">
                        <h4>En caso de fiscalizacion ,Que hacer?
                            haz Click en el boton de abajo.</h4>
                    </div>
                    <div class="btninfo">
                        <a href="{{ route('fiscalizacion') }}">Instrucciones</a>
                    </div>
                </div>
            </div>
            <div class="contOps col-lg-6 col-md-12 col-sm-12 col-12 ">
                <div class="op1 ">
                    <div class="tituloOp1">
                        <h2>Datos de Transferencia</h2>
                    </div>
                    <div class="contOp1">
                        <h4>para porder transferir haz click en el boton de aqui abajo para optener los Datos</h4>
                    </div>
                    <div class="btninfo">
                        <a href="{{ route('bancario') }}">Datos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mt-3 mb-5">
        <div class="row col-8">
            <form action="{{ route('comentario.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="tituloComentario">
                    Seccion de Comentarios
                </h2>
                <div class="form-group">
                    <input type="text" class="form-control nombre" id="nombre" name="nombre" required
                        placeholder="Tu Nombre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control cajaComentario" id="comentario" name="comentario" required
                        placeholder="Escribe tu comentario , es importante para Nosotros">
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-primary mt-2" type="submit" value="Enviar Comentario">
                </div>
            </form>
        </div>
    </div>

    <div class="contComentario col-lg-12">
        <h2 class="comentario col-lg-10">Comentarios</h2>
    </div>
    <div class="row">
        <hr class=" linea1 col-lg-4 col-md-4 col-sm4 col-4">
        <h5 class=" textoComentario col-lg-4 col-md-4 col-sm4 col-4">Algunos Comentarios de nuestros Ususarios</h5>
        <hr class="linea1 col-lg-4 col-md-4 col-sm4 col-4">
    </div>
    <div class="contenedorComentarios col-lg-12 col-md-12 col-sm-12 col-12">
        @foreach ($datos as $item)
            <div class="row contenedorDatos col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="nombreUsuario col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="nomusuario">
                        {{ $item->nombre }}
                    </div>
                    <br>
                    <div class="comentarioUsuario">
                        {{ $item->comentario }}
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@endsection
