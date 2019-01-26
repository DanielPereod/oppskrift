@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="form">
                <div class="form-header">{{ __('Login') }}</div>
                <div class="row  justify-content-center form-description">
                    <p class="col-md-6">
                        Bienvenido de nuevo! Inicia sesion para acceder a tu cuenta
                    </p>
                </div>

                <div class="form-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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

                        <div class="form-group row justify-content-center"> 
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                                <div class="col-md-6">
                                    <button type="submit" class="button-login">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link green-link" href="{{ route('password.request') }}">
                                        {{ __('Has olvidado tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
