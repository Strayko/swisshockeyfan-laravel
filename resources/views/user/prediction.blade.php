@extends('layouts.app')

@section('content')
<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title"> Predictions

                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
<section class="play-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="online-play-tab-part">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            @if(count($predictions) > 0)
                            @foreach($predictions as $prediction)
                            @if($prediction->match->finished)
                            <div class="play-table-part">
                                <div class="play-table">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b>{{ $prediction->match->place }}</b></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right match-date"><b>{{ $prediction->match->date_play }}</b></p>
                                        </div>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="team-name" width="20%">{{ __('Home Team') }}</th>
                                                <th class="team-name" rowspan="1" width="20%">
                                                    {{ __('Home Team Score') }}</th>
                                                <th class="team-name" width="20%">{{ __('Away Team') }}</th>
                                                <th class="team-name" width="20%">{{ __('Away Team Score') }}</th>
                                                <th class="team-name" align="center" style="text-align:center;">Points</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->home_team }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->home_score }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->away_team }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->away_score }}
                                                    </div>
                                                </td>
                                                <td rowspan="2" align="center">
                                                    <div class="team-name-part" style="text-align:center; justify-content:center; font-weight:800; font-size:22px">
                                                    @if ($prediction->points > 0)
                                                        <span style="color:darkgreen; font-size:22px; font-weight:800">{{ $prediction->points }}</span>
                                                    @else 
                                                        {{ $prediction->points}}
                                                    @endif
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part">
                                                        My Tip
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->home_score }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        My Tip
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->away_score }}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            @else 
                            <div class="play-table-part">

                                <div class="play-table">
                                <h5> Status: Nicht beendet </h5>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <p><b>{{ $prediction->match->place }}</b></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right match-date"><b>{{ $prediction->match->date_play }}</b></p>
                                        </div>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="team-name" width="20%">{{ __('Home Team') }}</th>
                                                <th class="team-name" rowspan="1" width="20%">
                                                    {{ __('Home Team Score') }}</th>
                                                <th class="team-name" width="20%">{{ __('Away Team') }}</th>
                                                <th class="team-name" width="20%">{{ __('Away Team Score') }}</th>
                                                <th class="team-name">Points</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->home_team }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->home_score }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->away_team }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->match->away_score }}
                                                    </div>
                                                </td>
                                                <td rowspan="2">
                                                    <div class="team-name-part" style="font-weight:800; font-size:18px">
                                                        {{ $prediction->points }}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part">
                                                        My Tip
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->home_score }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        My Tip
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        {{ $prediction->away_score }}
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            @endif
                            @endforeach
                            @else 
                            <h1> No predictions </h1>
                            @endif
                        </div>

                    </div>

                </div>
            </div><!-- online-play-tab-part end -->
        </div>
    </div>
    </div>
</section>



@endsection
@push('scripts')
    <script>
        let dates = document.querySelectorAll('.match-date')
        moment.locale('de-CH');

        dates.forEach(el => {
            let dateTime = new Date(el.innerText);
            el.innerText = moment(dateTime).format('DD MMMM YYYY HH:mm');
        })
    </script>
@endpush