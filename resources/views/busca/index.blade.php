@extends('layouts.app')

@section('template_title')
    Buscar
@endsection

@section('contentuno')
<!-- Masthead-->
<header class="masthead" style="background-image: url('img/cinco.jpg')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center" style="background-color: rgba(0, 0, 0, .5);">
                            <!-- Page heading-->
                            <h1 class="mb-5 text-white">DICCIONARIO TZ'UTUJIL</h1>

                    
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            
            <h3 class="page__heading">Ingresa la palabra que deseas buscar:</h3>
            <font color="#099DFF">
                <b>
                    <p>Tz'utujil, Español o Ingles</p>
                </b>
            </font>
            <br>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                
                                <br>
                                <form action="{{ route('buscas.index') }}" method="get" class="form-inline my-2 my-lg-0">
                                    <button class="btn btn-outline-primary mr-sm-2" type="submit">Buscar</button>
                                    <input class="form-control my-2 my-sm-0" type="search" placeholder="Ingrese una palabra" aria-label="Search" id="texto" name="texto" value="{{ $texto }}" autofocus>
                                </form>
                                
                                <br>
                            
                                <div class="alert alert-success" style="color: black; background-color: rgba(28, 215, 255, .2); border:none;">
                                    <b><p>{{ $message }}</p></b>
                                </div>
                            


                            <section class="features-icons bg-light text-center">
                                <div class="container">

                                        <br>
                                        @foreach ($datos as $dato)
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                    <h3>Tz'utujil</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>
                                                    <p class="lead mb-0">{{ $dato->tzutujil }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                    <h3>Español</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>
                                                    <p class="lead mb-0">{{ $dato->spanish }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-0 mb-lg-3">
                                                    <h3>Ingles</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>   
                                                    <p class="lead mb-0">{{ $dato->ingles }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <br></br>
                                        <div class="col-lg-12">
                                                <div class=" mx-auto mb-0 mb-lg-3">
                                                    <h3>#</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>   
                                                    <p class="lead mb-0">{{ $dato->hashtag }}</p>
                                                </div>
                                        </div>
                                        @endforeach
                                    </div>
                            </section>

                                <div class="pagination justify-content-end">
                                    {!! $datos->links() !!}
                                </div>
                
                        </div>
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
                <h2 class="mb-4">Deja un comentario:</h2>       

                    <div class="row">

                        <div class="col">
                            <div class="container">
                                <div class="row justify-content-center">

                                            @includeif('partials.errors')

                                            <div class="card-body">
                                                @if ($message = Session::get('success'))
                                                    <div class="alert alert-success" style="color: #FFFFFF; background-color: rgba(28, 215, 255, .2); border:none;">
                                                       <h3> <p>{{ $message }}</p></h3>
                                                    </div>
                                                @endif

                                                <form method="POST" action="{{ route('buscas.store') }}"  role="form" enctype="multipart/form-data">
                                                    @csrf

                                                    @include('comentario.form')
                                                </form>

                                            </div>
                                            
                                
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
@endsection