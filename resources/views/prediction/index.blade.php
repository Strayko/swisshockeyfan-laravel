@extends('layouts.app')

@section('content')
    <div class="container">
    {{ session('error') ? session('error') : '' }}
    @if(count($matchesArray) > 0)
    @foreach($matchesArray as $match)

            {!! Form::open(['method'=>'POST', 'action'=>'PredictionController@store']) !!}
            <input type="hidden" name="match_id" id="match_id" value="{{$match->id}}">
            <input type="hidden" name="finished" id="finished" value="1">
            <div class="home">
                <label for="home_score">{{$match->home_team}}</label><br>
                {!! Form::text('home_score', null, ['id'=>'home_score']) !!}
            </div>
            <div class="away">
                <label for="away_score">{{$match->away_team}}</label><br>
                {!! Form::text('away_score', null, ['id'=>'away_score']) !!}
            </div>
            <button type="submit">Submit</button>
            {!! Form::close() !!}

    @endforeach
        @else
        <h1>Nemaaaaaa plataaaa!</h1>
    @endif
    </div>
@endsection
