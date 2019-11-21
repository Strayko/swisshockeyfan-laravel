@extends('layouts.app')

@section('content')

  <!-- banner-section start -->
  <section class="banner-section">
    <div class="banner-content-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="banner-content text-center">
              <h1 class="banner-title wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">swisshockeyfan</h1>
              <div class="scroll-down" >
                <i class="fa fa-angle-down" id="scroll-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- banner-section end -->

   <!-- feature-section start -->
   <section class="feature-section section-padding pb-5" id="feature-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-0 pb-0">
          <div class="section-header text-center">
            <h2 class="section-title no-uppercase">Wir suchen den Swiss Hockey Fan 2019/2020</h2>
            <p>Jetzt mitspielen und Swiss Hockey Fan werden</p>
          </div>
          <p style="text-align: justify;">In der Schweiz ist Hockey ein Publikumssport und es gibt tolle Vereine mit vielen treuen Fans. Deshalb wollen wir diesen Fans die Chance geben zu beweisen, wieviel sie über ihre Lieblingsmannschaft und ihre Gegner wissen.
            <br> <br>
            Die Teilnehmer, welche sich online über die Homepage anmelden, haben die Chance bis 5 Min. vor jedem Spiel ihren Tipp zum Ausgang eines Spiels abzugeben. So können sie pro Spiel bis zu 5 Punkte erhalten.
            <br> <br>
            Getippt werden, kann auf die Spiele der Swiss Hockey NLA sowie die Hockey WM Spiele.
            <br> <br>
            Bei der Anmeldung wählen Sie, ob Sie nur für sich selber oder zusätzlich auch noch für eine Gruppe (z.B. ZSC Fangruppe) spielen wollen. Die besten Tipper werden als Monatssieger sowie Saisonsieger gekürt, ein Einstieg ist jederzeit möglich.
          </p>
          <br>
        </div>
      </div>
    </div>
   </section>
  <!-- feature-section end -->

    <!-- play-section start -->
   <section class="play-section section-padding section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Predict & Play Now</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="online-play-tab-part">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="play-table-part">
                  <div class="play-table">
                    <table>
                      <thead>
                        <tr>
                          <th class="team-name">Spiel</th>
                          <th class="choice-team">Tipp</th>
                          <th class="bet-num">Datum</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($matchesArray as $match)
                          @if(!$match->finished && $match->date_play > \Carbon\Carbon::now())
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
                                  <div class="team frm-group">
                                    <label for="home_score" class="name">{{$match->home_team}}</label>
                                    <input type="number" name="home_score" id="home_score" placeholder="{{$match->home_team}}">
                                  </div>
                                  <div class="team frm-group">
                                    <label for="away_score" class="name">{{$match->away_team}}</label>
                                    <input type="number" name="away_score" id="c_fname" placeholder="{{$match->away_team}}">
                                  </div>
                                  <div class="team frm-group">
                                    <button type="submit" class="single-item submit-button">Prognosieren</button>
                                  </div>

                                {!! Form::close() !!}
                              </td>
                              <td>
                                <span class="bet-count-num">{{$match->date_play}}</span>
                              </td>
                            </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
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

   <!-- download-app-section start -->
   <section class="download-app-section">
    <div class="download-app-wrapper d-flex">
      <div class="video-part">
        <a href="https://www.youtube.com/embed/attZXghV8xc" data-rel="lightcase:myCollection" class="round-video-btn"><i
            class="fa fa-play"></i></a>
      </div>
      <div class="app-content d-flex">
        <div class="content">
          <h2 class="title">swisshockeyfan</h2>
          <p>In der Schweiz ist Hockey ein Publikumssport und es gibt tolle Vereine mit vielen treuen Fans. Deshalb
            wollen wir diesen Fans die Chance geben zu beweisen wieviel sie über ihre Lieblingsmannschaft und ihre
            Gegner wissen.
          </p>
          <ul class="app-features-list">
            <li><i class="fa fa-check"></i>Das Gruppenergebnis wird aus den 20 besten Resultaten der Gruppenteilnehmer
              zusammengesetzt und Ende Saison prämieren wir die Gruppensieger.
            </li>
            <br>
            <li><i class="fa fa-check"></i>Der Abschluss und die Preisverleihung der Gesamtsieger finden Mitte 2019
              statt. Die Sieger werden vom OK kontaktiert.
            </li>
            <br>
            <li><i class="fa fa-check"></i>Der Swiss Hockey Fan wird jedes Jahr neu gesucht. Wir wünschen Euch viel
              Spass und Erfolg beim Tippen
            </li>
            <br>
          </ul>
          <div class="btn-area">
            @guest
            @if(Route::has('register'))
                <a href="{{ route('register') }}" class="cmn-btn btn-lg"><i class="fa fa-play"></i>Jetz Spiele</a>
            @endif
            @else
                <a href="{{ route('prediction.index') }}" class="cmn-btn btn-lg"><i class="fa fa-play"></i>Jetz Spiele</a>
            @endguest

          </div>
        </div>
        <div class="thumb">
          <img src="{{ asset('images/hockey.png') }}" alt="youtube">
        </div>
      </div>
    </div>
  </section>
  <!-- download-app-section end -->

    <!-- step-section start -->
    <section class="step-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title">Spielanleitung</h2>
            <p>In der Schweiz ist Hockey ein Publikumssport und es gibt tolle Vereine mit vielen treuen Fans. Deshalb
              wollen wir diesen Fans die Chance geben zu beweisen wieviel sie über ihre Lieblingsmannschaft und ihre
              Gegner wissen.</p>
          </div>
        </div>
      </div>
      <div class="row step-line margin-bottom-not-8">
        <div class="col-lg-4 col-md-4">
          <div class="step-item text-center">
            <div class="icon"><i class="fas fa-sign-in-alt"></i></div>
            <h3 class="title">Jetz anmelden</h3>
            <!-- <p>Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise.</p> -->
          </div>
        </div><!-- step-item end -->
        <div class="col-lg-4 col-md-4">
          <div class="step-item text-center">
            <div class="icon"><i class="fa fa-list-ol"></i></div>
            <h3 class="title">Tippabgabe</h3>
            <!-- <p>Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise.</p> -->
          </div>
        </div><!-- step-item end -->
        <div class="col-lg-4 col-md-4">
          <div class="step-item text-center">
            <div class="icon"><i class="flaticon-crown"></i></div>
            <h3 class="title">Abspielen</h3>
            <!-- <p>Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise.</p> -->
          </div>
        </div><!-- step-item end -->
      </div>
    </div>
  </section>
  <!-- step-section end -->

@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $("#scroll-down").click(function() {
        console.log($("#feature-section").offset().top)
        $("html, body").animate({ scrollTop: $("#feature-section").offset().top}, 500);
    })
});
</script>
@endpush
