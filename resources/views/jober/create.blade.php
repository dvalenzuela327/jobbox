@extends('layouts.app')

@section('content')

<div id="services" class="services-area area-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
      <div class="col-md-8 col-sm-8 col-xs-8">
        <div class="section-headline services-head text-center">
            <img src="/images/logo100px.png" style="margin-top:20px;"><br/>
            <h2 style="margin-top:20px;">Registro</h2>
        </div>
        <div class="section-headline services-head text-right">

            <form method="POST" action="{{ route('register') }}">
                @csrf

            

                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

                    <div class="col-md-6">
                        <input id="celula" type="text" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" name="cedula" value="{{ old('cedula') }}" required autofocus>

                        @if ($errors->has('cedula'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cedula') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                        @if ($errors->has('telefono'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                    <div class="col-md-6">
                        <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus>

                        @if ($errors->has('direccion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                <!-- Foto -->
                <div class="form-group row">
                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto de perfil') }}</label>

                    <div class="col-md-6">
                        <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" value="{{ old('foto') }}" required autofocus>

                        @if ($errors->has('foto'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('foto') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                


            


                <div class="section-headline services-head text-center">

                    <button type="submit" class="btn btn-success">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
