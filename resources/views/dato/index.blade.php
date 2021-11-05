@extends('layouts.app')

@section('template_title')
    Dato
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos del diccionario</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                
                                <div class="form-row">
                                    <div class="col-xs-12 col-md-1">
                                            <a href="{{ route('datos.create') }}" class="btn btn-primary " >
                                            {{ __('Crear') }}
                                            </a>
                                    </div>
                                </div>
                                <br>
                                <form action="{{ route('datos.index') }}" method="get">
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


                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Tzutujil</th>
                                            <th>Spanish</th>
                                            <th>Ingles</th>
                                            <th>Hashtag</th>
                                            <th>Iduser</th>
                                            <th>Usuer</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datos as $dato)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $dato->tzutujil }}</td>
                                                <td>{{ $dato->spanish }}</td>
                                                <td>{{ $dato->ingles }}</td>
                                                <td>{{ $dato->hashtag }}</td>
                                                <td>{{ $dato->iduser }}</td>
                                                <td>{{ $dato->user->name }}</td>

                                                <td>
                                                    <form action="{{ route('datos.destroy',$dato->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('datos.show',$dato->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('datos.edit',$dato->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

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
