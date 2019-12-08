@extends('layouts.principal')
@section('content')
<div class="site-blocks-cover overlay" id="services-section" style="background-image: url('img/tal-fondo.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                <div class="mt-5 elemento-9">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                    <div class="mt-4 col-md-auto" style="background-color: rgba(17,22,30,.5);">
                        <hr>
                        <form method="POST" class="mt-5" action="{{ route('register') }}">
                            @csrf
                            <!-- name -->
                            <div class="form-group row">
                                <label for="name" class="col-md-4 text-white col-form-label text-md-right">{{__('Nombre') }} </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- mail -->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 text-white col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- phone -->
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 text-white col-form-label text-md-right">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="form-group row">
                                <label for="address" class="col-md-4 text-white col-form-label text-md-right">{{ __('Direcccion') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <label for="password" class="col-md-4 text-white col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password Confirm -->
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-white text-md-right">{{ __('Confirmar Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        {{ __('Register') }}
                                    </button>
                                    <br>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--<div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
          <div class="card card-signup">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form  class="form" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="header header-primary text-center">
                <h4>Registrar</h4>
              </div>
              <p class="text-divider">Completa tus datos</p>
              <div class="content">
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$name) }}" placeholder="Nombre..." required  autofocus>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">mail</i>
                    </span>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $email) }}" placeholder="Email..." required autocomplete="email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">phone</i>
                    </span>
                  <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="phone..." required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password..." required >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">lock_outline</i>
                    </span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Password Confirmation..." required>
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Registrar</button>
              </div>
              <br>
            </form>

          </div>
        </div>
      </div>
  </div>-->

@endsection
