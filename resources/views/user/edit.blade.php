@extends('layouts.app')

@section('content')

<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">{{ __('Profile') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<section class="user-edit-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable m-3">
                    {{ session('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger m-3">
                    {{ session('error') }}
                </div>
            @endif


            <form class="cmn-form registration-form" method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
                @csrf
                <div class="frm-group">
                    <input type="text" id="firstName" placeholder="Vorname *" name="first_name"
                        value="{{ old('first_name', $user->first_name) }}" required autocomplete="first_name" autofocus>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="frm-group">
                    <input type="text" id="lastName" name="last_name" value="{{ old('last_name', $user->last_name) }}" required autocomplete="last_name"
                        autofocus ">
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="frm-group">
                    <input type="text" id="username" name="username"
                        value="{{ old('username', $user->username) }}" disabled>
                </div>

                <div class="frm-group">
                    <input type="text" id="email" name="email"
                        value="{{ old('email', $user->email) }}" disabled>
                </div>

                <div class="frm-group">
                    <input type="password" name="password" id="password" required autocomplete="password"
                        placeholder="Neues Passwort">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="frm-group">
                    <input type="password" id="password-confirm" placeholder="Passwort bestätigen"
                        name="password_confirmation">
                </div>

                <div class="frm-group">
                    <input id="mobilePhone" type="text" name="mobile_phone"
                           value="{{ old('mobile_phone', $user->mobile_phone) }}" required autocomplete="mobile_phone" placeholder="Handy Nr." autofocus>

                    @error('mobile_phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="frm-group">
                    <input id="telephone" type="text" name="telephone" value="{{ old('telephone', $user->telephone) }}" placeholder="Telefon Nr.">
                    @error('telephone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="frm-group">
                    <input id="street" type="text" class="@error('street') is-invalid @enderror"
                        name="street" value="{{ old('street', $user->street) }}" required autocomplete="street" autofocus
                        placeholder="Strasse" />
                    @error('street')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="frm-group">
                    <input id="post-code" type="text" name="post_code"
                        value="{{ old('post_code', $user->post_code) }}" required autocomplete="post_code" autofocus placeholder="Postleitzahl"/>
                    @error('post_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="frm-group">
                    <input id="place" type="text" type="text" class="@error('place') is-invalid @enderror"
                        name="place" value="{{ old('place', $user->place) }}" required autocomplete="place" autofocus placeholder="Ort">

                    @error('place')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="frm-group">
                    <button type="submit" class="btn btn-danger">{{ __('Update') }}</button>
                </div>

            </form>

        </div>
            <div>
        </div>
    </div>
</section>


@endsection
