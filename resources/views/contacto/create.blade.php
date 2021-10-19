@extends('layouts.app')

@section('template_title')
    Create Contacto
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h2 style="font-family: Poppins-Bold; font-size: 39px;">Contacto</h2>
            <p class="lead" style="font-family: Poppins-Bold;">
                Tel.: 502 4753 7269
                <br>
                Traductor: Francisco
                <br>
                E-mail: tzutujildiccionario@gmail.com
            </p>
    </div>

    <div class="col">
        <div class="container">
            <div class="row justify-content-center">

                        <span class="login100-form-title p-b-70" style="font-family: Poppins-Bold; font-size: 39px;">
                            {{ __('Envíe un correo') }}
                        </span>

                        @includeif('partials.errors')

                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" style="color: black; background-color:#D1F2EB;">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('contactos.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('contacto.form')

                            </form>
                        </div>
                        
            </div>
        </div>
    </div>
</div>
@endsection
