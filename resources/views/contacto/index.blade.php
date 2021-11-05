@extends('layouts.app')

@section('template_title')
    Contacto
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tablas de mensajes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                                <a href="{{ route('contactos.create') }}" class="btn btn-primary float-right">
                                  {{ __('Crear') }}
                                </a>
                
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" style="color: black; background-color:#E9F7EF;">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                    

                            <div class="table-responsive">
                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#515151">
                                        <tr>
                                        
                                        <th style="color:#fff;">No</th>
                                        <th style="color:#fff;">Nombre</th>
                                        <th style="color:#fff;">Correo</th>
                                        <th style="color:#fff;">Telefono</th>
                                        <th style="color:#fff;">Mensaje</th>
                                        <th style="color:#fff;">Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactos as $contacto)
                                            <tr>
                                               
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $contacto->nombre }}</td>
                                                <td>{{ $contacto->correo }}</td>
                                                <td>{{ $contacto->telefono }}</td>
                                                <td>{{ $contacto->mensaje }}</td>
                                            
                                                <td>
                                                    <form action="{{ route('contactos.destroy',$contacto->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('contactos.show',$contacto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('contactos.edit',$contacto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                                {!! $contactos->links() !!}
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
