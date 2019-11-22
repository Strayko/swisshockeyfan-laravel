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
                    <input type="hidden" name="match_id" id="match_id" value="{{$match->id}}">
                    <input type="hidden" name="finished" id="finished" value="1">
                    <div class="team frm-group number-input">
                        <label for="home_team" class="name">{{$match->home_team}}</label>
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); event.preventDefault()" ></button>
                            {!! Form::number('home_score', null, ['id'=>'home_score']) !!}
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); event.preventDefault()" class="plus"></button>
                        </div>

                    </div>
                    <div class="team frm-group number-input">
                        <label for="home_team" class="name">{{$match->away_team}}</label>
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown();event.preventDefault()" ></button>
                            {!! Form::number('away_score', null, ['id'=>'away_score']) !!}
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp();event.preventDefault()" class="plus"></button>
                        </div>
                    </div>
                    <div class="team frm-group">
                        @if(Auth::check())
                            <button type="submit" class="single-item submit-button">Prognosieren</button>
                        @else
                            <a href="{{ route('login') }}" class="single-item submit-button">{{ __('Einloggen') }}</a>
                        @endif
                    </div>
                {!! Form::close() !!}
            </td>
            <td>
                <span class="bet-count-num match-date">{{$match->date_play}}</span>
            </td>
        </tr>
    @endforeach
@else
    <h1>Kein Hockeyspiele Mehr</h1>
@endif

@push('scripts')
<script>
$('form').on('click', 'button:not([type="submit"])', function(e){
  e.preventDefault();
})
</script>
@endpush

