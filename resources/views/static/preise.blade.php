@extends('layouts.app')

@section('content')

<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h1 class="title">Preise</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<section class="play-section section-padding section-bg trophies">
    <div class="container">
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
                                                <th class="team-name" width="15%">Rang</th>
                                                <th class="team-name" rowspan="1" width="30%">Preis</th>
                                                <th class="team-name" width="40%">Sponsor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part trophy">
                                                        <img src="{{ asset('images/gold.png') }}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        2 Übernachtungen - 2 Personen Huus Gstaad
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part trophy">
                                                        <img src="{{ asset('images/silver.png') }}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        Übernachtung - 2 Personen Hotel Rosatsch
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="team-name-part trophy">
                                                        <img src="{{ asset('images/bronze.png') }}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        Gutschein CHF 100.00 Gasthaus Wildenmann
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                    <td>
                                                        <div class="rank-name">
                                                            4.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            EV Zug Trikot
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            EVZ
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="rank-name text-center">
                                                            5.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part text-center">
                                                            EV Zug Trikot
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            EVZ
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="rank-name text-center">
                                                            6.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part text-center">
                                                            Gutschein CHF 50.00 Pony Ranch Seewen
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            Pony Ranch Seewen
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="rank-name text-center">
                                                            7.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part text-center">
                                                            Icepeack Tasche
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            Icepeack
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="rank-name text-center">
                                                            8.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part text-center">
                                                            Icepeack Tasche
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            Icepeack
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="rank-name text-center">
                                                            9.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part text-center">
                                                            Icepeack Tasche
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            Icepeack
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="rank-name text-center">
                                                            10.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part text-center">
                                                            Icepeack Tasche
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="team-name-part">
                                                            Icepeack
                                                        </div>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- online-play-tab-part end -->
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3 class="mb-2">Ihr Gewinn wird per Post zugestellt!</h3>
                <p>Wir wünschen Ihnen viel Spass mit Ihrem Gewinn…<br>
                    Ihr Swiss Hockey Fan Tippspiel-Team</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="mb-2">Gewinner Auslosung</h3>
                <p>Die Gewinner werden per Email benachrichtigt.</p>
                <p>Falls mehrere Gewinner mit der selben Punktzahl einen Rang belegen, wird aufgrund der Glückszahl, welche bei der Registrierung abgegeben wurde, ausgelost.</p>
                <p>Eine Barauszahlung des Preises ist nicht möglich. Über das Gewinnspiel wird keine Korrespondenz geführt und der Rechtsweg ist ausgeschlossen.</p>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2">Aktualisierung der Rangliste</h3>
                <p>Die Rangliste & Punke der Spieler sind jeweils bis zum nächsten Morgen um 10.00 Uhr auf dem neusten Stand.</p>
                <p>Spielverschiebungen können evtl. nicht berücksichtigt werden.</p>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
