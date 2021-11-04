@extends('layouts.app')

@section('template_title')
    Crear Dato
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="container">
            <div class="row justify-content-center">

                    <span class="login100-form-title p-b-70" style="font-family: Poppins-Bold; font-size: 39px;">
                        {{ __('Crear un dato del diccionario:') }}
                    </span>

                @includeif('partials.errors')

                    <div class="card-body">
                        <form method="POST" action="{{ route('datos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('dato.form')

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
