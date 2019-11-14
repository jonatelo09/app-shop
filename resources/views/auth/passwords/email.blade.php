@extends('layouts.principal')

@section('content')
<div class="site-blocks-cover overlay" id="services-section" style="background-image: url('{{asset('img/tal-fondo.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="elemento-9">
                <div class="text-white"><h4>{{ __('Restaurar Contraseña') }}</h4></div>

                <div class="col-md-auto" style="background-color: rgba(17,22,30,.5);">
                    <hr>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 text-white col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Enviar enlace') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
