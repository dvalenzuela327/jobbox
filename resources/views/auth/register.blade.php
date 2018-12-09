@extends('layouts.prin')

@section('content')

<div id="main" class="wrapper style4">
    <!-- Content -->
    <div id="content" class="container">
        <section>
            <header class="major text-center">
                <div>
                    <img src="/images/logo100px.png"><br/>
                    <span class="byline">Registrarse</span>
                </div>
            </header>

            <div class="section-headline services-head text-right">
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
            
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
            
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
            
                            <!-- select-->
                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de usuario') }}</label>
            
                                <div class="col-md-6">
                                    <select name="type" id="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" value="{{ old('type') }}" required>
                                        <option value="">Seleccionar opción</option>
                                        <option value="cliente">Cliente</option>
                                        <option value="jober">Jober</option>
                                    </select>
                                </div>
                            </div>
                            <!-- select-->
            
            
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
            
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repetir contraseña') }}</label>
            
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
            
                            <div class="section-headline services-head text-center">
            
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </form>
            </div>
        </section>
    </div>
</div>
@endsection

