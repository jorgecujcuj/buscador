    <div class="form-group row">
        <label for="comentario" class="col-md-4 col-form-label text-md-right">{{ __('Comentario:') }}</label>

        <div class="col-md-6">
            <textarea id="comentario" class="form-control @error('comentario') is-invalid @enderror" name="comentario" required autocomplete="comentario" autofocus>{{ old('comentario') }}</textarea>

            @error('comentario')
                <span class="invalid-feedback" role="alert" style="color: #FF0000; background-color: rgba(28, 215, 255, .2); border:none;" >
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
                                    
    <div class="form-group row">
        <label for="nombreautor" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

        <div class="col-md-6">
            <input id="nombreautor" type="text" class="form-control @error('nombreautor') is-invalid @enderror" name="nombreautor" value="{{ old('nombreautor') }}" required autocomplete="nombreautor" autofocus>

            @error('nombreautor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-success" style="width: 45%;
                height: 50px;
                background-color: #57b846;
                border-radius: 25px;">
                {{ __('Comentar') }}
            </button>
        </div>
    </div>