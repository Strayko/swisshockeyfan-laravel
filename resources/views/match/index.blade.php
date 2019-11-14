@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($matches as $match)
            @if(!$match->finished)
                {!! Form::open(['method'=>'PATCH', 'action'=>['MatchController@update', $match->id]]) !!}
                <input type="hidden" name="finished" id="finished" value="1">
                <div class="home">
                    <label for="home_team">{{$match->home_team}}</label><br>
                    {!! Form::text('home_score', null, ['id'=>'home_score']) !!}
                </div>
                <div class="away">
                    <label for="away_team">{{$match->away_team}}</label><br>
                    {!! Form::text('away_score', null, ['id'=>'away_score']) !!}
                </div>
                <button type="submit">Submit</button>
                {!! Form::close() !!}
            @endif
        @endforeach

    </div>
@endsection
