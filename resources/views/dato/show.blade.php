@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? 'Show Dato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver el dato del diccionario:</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tzutujil:</strong>
                            {{ $dato->tzutujil }}
                        </div>
                        <div class="form-group">
                            <strong>Spanish:</strong>
                            {{ $dato->spanish }}
                        </div>
                        <div class="form-group">
                            <strong>Ingles:</strong>
                            {{ $dato->ingles }}
                        </div>
                        <div class="form-group">
                            <strong>Hashtag:</strong>
                            {{ $dato->hashtag }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $dato->iduser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
