@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/landing-page.jpg') }}'); background-size: cover; background-position: top center;">
  <div class="container">
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
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $email) }}" placeholder="Email..." required autocomplete="email" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">phone</i>
                    </span>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="phone..." required autocomplete="phone" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password..." required autocomplete="current-password">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">lock_outline</i>
                    </span>                  
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Password Confirmation..." required autocomplete="current-password">
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Registrar</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
