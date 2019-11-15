@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Predictions') }}</div>
                    <div class="card-body">
                        @foreach($predictions as $prediction)
                            @if($prediction->match->finished)
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b>{{ $prediction->match->place }}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-right"><b>{{ $prediction->match->date_play }}</b></p>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Home Team') }}</th>
                                            <th>{{ __('Home Team Score') }}</th>
                                            <th>{{ __('Away Team') }}</th>
                                            <th>{{ __('Away Team Score') }}</th>
                                            <th>{{ __('Points') }}</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>{{ $prediction->match->home_team }}</td>
                                        <td>{{ $prediction->match->home_score }}</td>
                                        <td>{{ $prediction->match->away_team }}</td>
                                        <td>{{ $prediction->match->away_score }}</td>
                                        <td colspan="2" rowspan="2">{{ $prediction->points }}</td>
                                    </tr>
                                    <tr>
                                        <td>My Tip:</td>
                                        <td>{{ $prediction->home_score }}</td>
                                        <td>My Tip:</td>
                                        <td>{{ $prediction->away_score }}</td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Sidebar') }}</div>
                    <div class="card-body">
                        @include('includes.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
