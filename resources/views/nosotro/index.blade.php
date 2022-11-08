@extends('layouts.app')

@section('contentuno')
<!-- Masthead-->
<header class="masthead" style="background-image: url('img/cuatro.jpg')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center" style="background-color: rgba(0, 0, 0, .5);">
                            <!-- Page heading-->
                            <h1 class="mb-4 text-white">Sobre Nosotros</h1>

                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection

@section('content')

    <h2 style="font-family: Poppins-Bold; font-size: 39px;">¿Quiénes somos?</h2>
        <p class="lead" style="font-family: Poppins-Bold;">
        En el año 2019 surgió una iniciativa de dos jóvenes que residen en Santiago Atitlán, departamento de Sololá en la cual analizaron sobre un proyecto la creación de un diccionario del idioma tz’utujil con el agregado de dos idiomas más el Español e Inglés. Este proyecto se realizó con el objetivo de fortalecer el idioma materno Tz’utujil de nuestra comunidad a través de esta herramienta digital.
        </p><p class="lead" style="font-family: Poppins-Bold;">
        También el propósito de este diccionario es facilitar la enseñanza-aprendizaje a los actores educativos de diferentes niveles tal como preprimario, primario, medio y universitario para que ellos desarrollan sus capacidades en la escritura y la pronunciación del idioma Tz’utujil. Este proyecto fue financiado por un amigo extranjero que tiene el interés de apoyar nuestro idioma maya.
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

@section('contenttres')
<section class="bs-calltoaction bs-calltoaction-default text-white text-center" id="signup">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <h2 class="mb-4">Ready to get started?</h2>       

            </div>         
        </div>
    </div>
</section>
@endsection