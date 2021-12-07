@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comenrarios:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#515151">
                                        <tr>
                                        <th style="color:#fff;">Id</th>
                                        <th style="color:#fff;">Nombre</th>
                                        <th style="color:#fff;">Correo</th>
                                        <th style="color:#fff;">Comentario</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comentarios as $comentario)
                                            <tr>
                                                <td>{{ $comentario->idcomentario }}</td>
                                                <td>{{ $comentario->nombreautor }}</td>
                                                <td>{{ $comentario->email }}</td>
                                                <td>{{ $comentario->comentario }}</td>
                                            
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination justify-content-end">
                                {!! $comentarios->links() !!}
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
