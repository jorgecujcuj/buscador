        <div class="form-group row">
            <label for="tzutujil" class="col-md-4 col-form-label text-md-right">{{ __("Tz'utujil:") }}</label>

            <div class="col-md-6">
                <input id="tzutujil" type="text" class="form-control @error('tzutujil') is-invalid @enderror" name="tzutujil" value="{{ old('tzutujil') }}" required autocomplete="tzutujil" autofocus>

                 @error('tzutujil')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="spanish" class="col-md-4 col-form-label text-md-right">{{ __('Español:') }}</label>

            <div class="col-md-6">
                <input id="spanish" type="text" class="form-control @error('spanish') is-invalid @enderror" name="spanish" value="{{ old('spanish') }}" required autocomplete="spanish" autofocus>

                 @error('spanish')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="ingles" class="col-md-4 col-form-label text-md-right">{{ __('Ingles:') }}</label>

            <div class="col-md-6">
                <input id="ingles" type="text" class="form-control @error('ingles') is-invalid @enderror" name="ingles" value="{{ old('ingles') }}" required autocomplete="ingles" autofocus>

                 @error('ingles')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="hashtag" class="col-md-4 col-form-label text-md-right">{{ __('Hashtag:') }}</label>

            <div class="col-md-6">
                <input id="hashtag" type="text" class="form-control @error('hashtag') is-invalid @enderror" name="hashtag" value="{{ old('hashtag') }}" required autocomplete="hashtag" autofocus>

                 @error('hashtag')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="iduser"
            name="iduser" id="iduser" value="{{ Auth::user()->id }}">
            </label>
        </div>

        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
