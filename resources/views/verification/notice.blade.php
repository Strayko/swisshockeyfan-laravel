@extends('layouts.app')

@section('content')
    <section class="confirmed-email feature-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="confirmed-email-title">Bitte überprüfen Sie zuerst Ihr Konto <a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
