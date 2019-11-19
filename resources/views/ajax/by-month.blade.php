@if(count($matchesArray) > 0)
    @foreach($matchesArray as $match)
        <tr>
            <td>
                <div class="team-name-part">
                    <i class="fas fa-hockey-puck"></i>
                </div>
            </td>
            <td>
                {!! Form::open(['method'=>'POST', 'action'=>'PredictionController@store', 'class'=>'choice-team-part cmn-form']) !!}
                <form class="choice-team-part cmn-form">
                    <input type="hidden" name="match_id" id="match_id" value="{{$match->id}}">
                    <input type="hidden" name="finished" id="finished" value="1">
                    <div class="team frm-group">
                        <label for="home_team" class="name">{{$match->home_team}}</label>
                        {!! Form::text('home_score', null, ['id'=>'home_score']) !!}
                    </div>
                    <div class="team frm-group">
                        <label for="home_team" class="name">{{$match->away_team}}</label>
                        {!! Form::text('away_score', null, ['id'=>'away_score']) !!}
                    </div>
                    <div class="team frm-group">
                        @if(Auth::check())
                            <button type="submit" class="single-item submit-button">Submit</button>
                        @else
                            <a href="{{ route('login') }}" class="single-item submit-button">{{ __('Login') }}</a>
                        @endif
                    </div>
                </form>
                {!! Form::close() !!}
            </td>
            <td>
                <span class="bet-count-num match-date">{{$match->date_play}}</span>
            </td>
        </tr>
    @endforeach
@else
    <h1>No records</h1>
@endif

