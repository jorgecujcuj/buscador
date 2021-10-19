@extends('layouts.app')

@section('contentuno')
<!-- Masthead-->
<header class="masthead" style="background-image: url('img/cuatro.jpg')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-4">Sobre Nosotros</h1>

                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection

@section('content')

    <h2 style="font-family: Poppins-Bold; font-size: 39px;">FRANSISCO TRADUCTOR</h2>
        <p class="lead" style="font-family: Poppins-Bold;">
        Somos un grupo de persona que nos dedicamos a traducir palabras en el idioma tz'utuji
        </p>

<!-- Contact section-->
<div class="container">
    <div class="row justify-content-center">
        <img src="{{ asset('img/logo.png')}}" class="img-fluid" alt="Responsive image">
    </div>
</div>
@endsection


@section('contentdos')
<section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Santiago Atitlan...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/uno.jpg')}}" alt="..." />
                            <p class="font-weight-light mb-0">"Santiago Atitlán es un municipio del departamento de Sololá en la República de Guatemala. La cabecera municipal, con el mismo nombre, se encuentra en la orilla suroeste del lago de Atitlán a una altitud de 1593 msnm."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/dos.jpg')}}" alt="..." />
                            <p class="font-weight-light mb-0">"El idioma tz’utujil es hablado por la etnia del mismo nombre. Esta, en su mayoría, habita en diversas regiones del departamento de Sololá y en algunas localidades de Suchitepéquez."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/tres.jpg')}}" alt="..." />
                            <p class="font-weight-light mb-0">"Una de sus características principales es que en el municipio se venera a Maximón, que es una deidad originada del sincretismo entre Rijlaj Mam —o Rilaj Maam, el nahual de los tz'utujiles dada su condición de pueblo colonizado— y Simón Pedro, el apóstol de Cristo, que quisieron enseñar los frailes franciscanos a la población durante la época colonial."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection