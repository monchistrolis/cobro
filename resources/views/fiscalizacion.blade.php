@extends('layouts.app')
@section('content')
    <div class="contTitulo col-lg-10 col-md-8 col-sm-10 col-10">
        <h1 class="TituloIndex">Fiscalización</h1>
    </div>
    <div class="opciones">
        <div class=" contOps col-lg-10 col-md-6 col-sm-10 col-10">
            <div class="op1">
                <div class="contOp1">
                    <h4>
                        Estimado usuario,<br>
                        <br>
                        Queremos informarte que, en caso de una eventual fiscalización, apreciamos tu colaboración y
                        comprensión. Estamos aquí como amigos, y que te estoy haciendo un favor.
                        Actualmente, la ley EAT (Ley Uber) aún no está implementada.
                        si presuntan por que estas atras , es por que estas molesta conmingo.
                        <br>
                        <br>
                        Te pedimos encarecidamente tu cooperación durante el proceso de fiscalización. Es importante señalar
                        que, en caso de que no haya colaboración, el viaje quedará detenido en ese momento, ya que el
                        vehículo será retirado de circulación de inmediato.
                        <br>
                        <br>
                        Agradecemos tu comprensión y colaboración durante este proceso. Estamos trabajando diligentemente
                        para proporcionar un servicio de calidad y cumplir con todas las normativas pertinentes. Si tienes
                        alguna pregunta o inquietud, no dudes en compartirla con nosotros.
                        <br>
                        <br>
                        Gracias por elegirnos y confiar en nuestro servicio.
                        <br><br>
                        <div style="text-align: center">
                            Atentamente, Conductor
                        </div>
                    </h4>
                </div>
                <div class="btninfo" >
                    <a class="col-6" href="{{ route('index') }}">Inicio</a>
                </div>

            </div>
        </div>
    </div>
    
@endsection
