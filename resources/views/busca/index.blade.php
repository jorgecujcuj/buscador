@extends('layouts.app')

@section('template_title')
    Buscar
@endsection

@section('contentuno')
<!-- Masthead-->
<header class="masthead" style="background-image: url('img/uno.jpg')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">DICCIONARIO TZ'UTUJIL</h1>

                    
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
                                <form action="{{ route('buscas.index') }}" method="get">
                                    <div class="form-row">
                                        <div class="col-xs-6 col-md-1">     
                                            <input type="submit" class="btn btn-primary" Value="Buscar">
                                        </div>

                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" placeholder="Ingrese una palabra" id="texto" name="texto" value="{{ $texto }}">
                                            </div>  
                                            
                                        </div>        
                                </form>
                                
                                <br>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif


                            <section class="features-icons bg-light text-center">
                                <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                    <h3>Tz'utujil</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                    <h3>Español</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-0 mb-lg-3">
                                                    <h3>Ingles</h3>
                                                    <hr style="width:150px; margin: auto; height:5px;"/>   
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        @foreach ($datos as $dato)
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-5 mb-lg-0 mb-lg-0">
                                                   
                                                    <p class="lead mb-0">{{ $dato->tzutujil }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-5 mb-lg-0 mb-lg-0">
                                                   
                                                    <p class="lead mb-0">{{ $dato->spanish }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class=" mx-auto mb-0 mb-lg-0">
                                               
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
