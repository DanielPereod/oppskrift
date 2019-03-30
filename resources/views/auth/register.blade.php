@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="form">
                        <div class="form-header">{{ __('Registro') }}</div>
                        <div class="row  justify-content-center form-description">
                            <p class="col-md-6">
                                Bienvenido! Crea una cuenta para a aprovechar al maximo
                            </p>
                        </div>
        
                        <div class="form-body">
                    <form method="POST" id="signupForm" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row  justify-content-center">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} input" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
    
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required placeholder="Confirma la Password">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-md-6">
                                <button type="submit" class="button-login">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
