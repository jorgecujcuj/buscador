        <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre',$contacto->nombre) }}" required autocomplete="nombre" autofocus>

                 @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
                <label for="correo" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo',$contacto->correo) }}" required autocomplete="correo">

                @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono:') }}</label>

            <div class="col-md-6">
                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono',$contacto->telefono) }}" required autocomplete="telefono" autofocus>

                 @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="mensaje" class="col-md-4 col-form-label text-md-right">{{ __('Mensaje:') }}</label>

            <div class="col-md-6">
                <textarea id="mensaje" class="form-control @error('mensaje') is-invalid @enderror" name="mensaje" value="{{ $contacto->mensaje }}" required autocomplete="mensaje" autofocus>{{ old('mensaje',$contacto->mensaje) }}</textarea>

                 @error('mensaje')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="{{ route('contactos.index') }}"> Regresar</a>
        </div>