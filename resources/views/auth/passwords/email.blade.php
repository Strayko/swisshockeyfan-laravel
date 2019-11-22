@extends('layouts.app')

@section('content')
    <section class="login-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="login-block text-center">
                        <div class="login-block-inner">
                            <h3 class="title">Passwort zurücksetzen</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}" class="cmn-form login-form">
                                @csrf

                                <div class="frm-group">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Adresse eingeben">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="frm-group">
                                    <button type="submit" class="submit-btn">{{ __('Link zum Zurücksetzen des Passworts senden') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
