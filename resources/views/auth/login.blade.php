@extends('layouts.app')

@section('body-class', 'signup-page')
                                
@section('content')
<div class="header header-filter"
    style="background-image: url('{{ asset('img/landing-page.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <h4>Inicio de Sesión</h4>
                        </div>
                        <p class="text-divider">Ingresa tus datos</p>

                        <div class="content">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="input-group-text">
                                        <i class="material-icons">mail</i>
                                    </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email..." required
                                    autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password..." required autocomplete="current-password">
                            </div>

                            <div class="checkbox checkbox-derecha">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                        checked>
                                    Recordar Session
                                </label>
                            </div>
                        </div>
                        
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-wd btn-lg">Ingresar</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection