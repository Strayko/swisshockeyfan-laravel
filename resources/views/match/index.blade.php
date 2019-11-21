@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Match Result') }}</div>
                    <div class="card-body">
                        @foreach($matches as $match)
                            @if(!$match->finished && $match->date_play > \Carbon\Carbon::now() )
                                <div class="row mb-5">
                                    <div>{{ $match->date_play }}</div>
                                    <div class="col-md-12">
                                        {!! Form::open(['method'=>'PATCH', 'action'=>['MatchController@update', $match->id]]) !!}
                                        <input type="hidden" name="finished" id="finished" value="1">
                                        {{$match->date_play}}
                                        <div class="form-group">
                                            <label for="home_team">{{$match->home_team}}</label><br>
                                            {!! Form::text('home_score', null, ['id'=>'home_score', 'class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="away_team">{{$match->away_team}}</label><br>
                                            {!! Form::text('away_score', null, ['id'=>'away_score', 'class' => 'form-control']) !!}
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
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
