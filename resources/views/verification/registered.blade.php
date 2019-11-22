@extends('layouts.app')

@section('content')
    <section class="confirmed-email feature-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title mb-5">Ihr Konto ist registriert</h2>
                        <a href="{{ route('prediction.index') }}" class="btn btn-dark">Jetzt spielen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
