@extends('layouts.app')

@section('content')

<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">{{ __('Registrierung') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<section class="registration-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="registration-block text-center">
                    <div class="registration-block-inner">
                        <h3 class="title">{{ __('Mitmachen!') }}</h3>
                        <form class="cmn-form registration-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="frm-group">
                                <input type="text" id="firstName" placeholder="Vorname *" name="first_name"
                                    value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="frm-group">
                                <input type="text" id="lastName" name="last_name" value="{{ old('last_name') }}"
                                    required autocomplete="last_name" autofocus placeholder="{{ __('Last Name *') }}">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input type="text" id="username" placeholder="Nachname *" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="{{ __('E-Mail') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input type="password" name="password" id="password" required autocomplete="password"
                                    placeholder="Passwort">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input type="password" id="password-confirm" placeholder="Passwort bestätigen"
                                    name="password_confirmation" required autocomplete="password">
                            </div>
                            <div class="frm-group">
                                <input id="mobilePhone" type="text"
                                    class="@error('mobile_phone') is-invalid @enderror" name="mobile_phone"
                                    value="{{ old('mobile_phone') }}" required autocomplete="mobile_phone" autofocus placeholder="Handy Nr. *">
                                @error('mobile_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input id="telephone" type="text" name="telephone" value="{{ old('telephone') }}" placeholder="Telefon Nr.">
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input id="street" type="text" class="@error('street') is-invalid @enderror"
                                    name="street" value="{{ old('street') }}" required autocomplete="street" autofocus
                                    placeholder="Strasse" />
                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input id="post-code" type="text" name="post_code"
                                    value="{{ old('post_code') }}" required autocomplete="post_code" autofocus placeholder="Postleitzahl"/>
                                @error('post_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <input id="place" type="text" type="text" class="@error('place') is-invalid @enderror"
                                    name="place" value="{{ old('place') }}" required autocomplete="place" autofocus placeholder="Ort">

                                @error('place')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="frm-group">
                                <span>* Bei gleicher Ranglisten-Platzierung, entscheidet dieser Tipp (inklusive Verlängerung und Penaltyschiessen)!
Bitte überprüfen Sie Ihren Spamordner, falls Sie keine Registrierungsmail von uns erhalten haben nach der Registrierung!</span>
                            </div>
                            <div class="frm-group">
                                <button type="submit" class="submit-btn">{{ __('Registrierung') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection