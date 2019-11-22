@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body" style="margin: 150px 0 150px 0; text-align: center;">
                        <h1 style="color:red;">Bitte überprüfen Sie zuerst Ihr Konto <a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
