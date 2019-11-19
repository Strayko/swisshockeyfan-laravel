@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')
     <!-- banner-section start -->
      <section class="breadcum-section">
        <div class="breadcum-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="breadcum-content text-center">
                  <h3 class="title">Spielplan / Tippabgabe</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner-section end -->

          <!-- play-section start -->
    <section class="play-section section-padding section-bg">

        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="online-play-tab-part">
                        <ul class="nav justify-content-around" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                    aria-controls="all" aria-selected="true">
                                    <i class="fas fa-list"></i>
                                    <span>All</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="football-tab" data-toggle="tab" href="#football" role="tab"
                                    aria-controls="football" aria-selected="false">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>November</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cricket-tab" data-toggle="tab" href="#cricket" role="tab"
                                    aria-controls="cricket" aria-selected="false">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Dezember</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tennis-tab" data-toggle="tab" href="#tennis" role="tab"
                                    aria-controls="tennis" aria-selected="false">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Januar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bascketball-tab" data-toggle="tab" href="#bascketball"
                                    role="tab" aria-controls="bascketball" aria-selected="false">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Februar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="baseball-tab" data-toggle="tab" href="#baseball" role="tab"
                                    aria-controls="baseball" aria-selected="false">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Marz</span>
                                </a>
                            </li>
                        </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">


                                <a class="month" data-column_name="0" href="javascript:void(0);">All</a>
                                <a class="month" data-column_name="1" href="javascript:void(0);">January</a>
                                <a class="month" data-column_name="2" href="javascript:void(0);">February</a>
                                <a class="month" data-column_name="3" href="javascript:void(0);">March</a>
                                <a class="month" data-column_name="4" href="javascript:void(0);">April</a>
                                <a class="month" data-column_name="5" href="javascript:void(0);">May</a>
                                <a class="month" data-column_name="6" href="javascript:void(0);">June</a>
                                <a class="month" data-column_name="7" href="javascript:void(0);">July</a>
                                <a class="month" data-column_name="8" href="javascript:void(0);">August</a>
                                <a class="month" data-column_name="9" href="javascript:void(0);">September</a>
                                <a class="month" data-column_name="10" href="javascript:void(0);">October</a>
                                <a class="month" data-column_name="11" href="javascript:void(0);">November</a>
                                <a class="month" data-column_name="12" href="javascript:void(0);">December</a>



                        <div class="play-table-part">
                                    <div class="play-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="team-name">Match</th>
                                                <th class="choice-team">Tipp</th>
                                                <th class="bet-num">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <h3 style="color:#e52520; font-weight:700;margin-bottom:10px;">{{ session('error') ? session('error') : '' }}<h3>
{{--                                        @if(count($matchesArray) > 0)--}}

                                            @include('ajax.by-month')
{{--                                        @else--}}
{{--                                            <h1>No records</h1>--}}
{{--                                        @endif--}}
                                        </tbody>
                                    </table>

                                    </div>
                                </div>
                        </div>

                        <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="play-table-part">
                                    <div class="play-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="team-name">Match</th>
                                                <th class="choice-team">Tipp</th>
                                                <th class="bet-num">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
{{--                                        @if(count($matchesArray) > 0)--}}
{{--                                        @foreach($matchesArray as $match)--}}
{{--                                            <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="team-name-part">--}}
{{--                                                    <i class="fas fa-hockey-puck"></i>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                                {!! Form::open(['method'=>'POST', 'action'=>'PredictionController@store', 'class'=>'choice-team-part cmn-form']) !!}--}}
{{--                                                <form class="choice-team-part cmn-form">--}}
{{--                                                    <input type="hidden" name="match_id" id="match_id" value="{{$match->id}}">--}}
{{--                                                    <input type="hidden" name="finished" id="finished" value="1">--}}
{{--                                                    <div class="team frm-group">--}}
{{--                                                        <label for="home_team" class="name">{{$match->home_team}}</label>--}}
{{--                                                        {!! Form::text('home_score', null, ['id'=>'home_score']) !!}--}}
{{--                                                    </div>--}}
{{--                                                    <div class="team frm-group">--}}
{{--                                                        <label for="home_team" class="name">{{$match->away_team}}</label>--}}
{{--                                                        {!! Form::text('home_score', null, ['id'=>'home_score']) !!}--}}
{{--                                                    </div>--}}
{{--                                                    <button type="submit">Submit</button>--}}
{{--                                                </form>--}}
{{--                                                {!! Form::close() !!}--}}
{{--                                            <td>--}}
{{--                                                <span class="bet-count-num">{{ $match->play_date }}</span>--}}
{{--                                            </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        @else--}}
{{--                                        <h1>No records</h1>--}}
{{--                                        @endif--}}
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                        </div>


                    </div>

                    </div>
                </div><!-- online-play-tab-part end -->
            </div>
        </div>
        </div>
    </section>
    <!-- play-section end -->
@endsection
<script>
    $(document).ready(function(){



        function clear_icon()
        {
            $('#id_icon').html('');
            $('#post_title_icon').html('');
        }

        // var parametarSet;
        // var parametar = window.location.href;
        // var parametarExport = parametar.match(/en/);
        // if (parametarExport == 'en') {
        //     parametarSet = 'en';
        // } else {
        //     parametarSet = 'de'
        // }

        function fetch_data(column_name)
        {
            $.ajax({
                url:"/prediction/spy5k2YgeWYBY46X?sortby="+column_name,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }


        $(document).on('click', '.month', function(){
            var column_name = $(this).data('column_name');
            fetch_data(column_name);
        });




    });
</script>