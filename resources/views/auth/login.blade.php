@extends('layouts.app')

@section('content')


  <section class="login-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="login-block text-center">
            <div class="login-block-inner">
              <h3 class="title">Login</h3>
              <form class="cmn-form login-form" method="POST" action="{{ route('login') }}">
                 @csrf
                <div class="frm-group">
                  <input type="email" name="email" id="email" placeholder="e-mail">

                  @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                  @endif
                </div>
                <div class="frm-group">
                  <input type="password" placeholder="passwort" name="password" required autocomplete="current-password">
                  @if($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                  @endif
                </div>

                <input class="form-check-input" type="hidden" name="remember" id="remember" checked {{ old('remember') ? 'checked' : '' }}>
                <div class="frm-group">
                  <button type="submit" class="submit-btn">{{ __('Einloggen') }}</button>
                </div>
              </form>
              <p><a href="{{ route('register') }}">Registrierung?</a><a href="{{ route('password.request') }}">Zugangsdaten vergessen?</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
