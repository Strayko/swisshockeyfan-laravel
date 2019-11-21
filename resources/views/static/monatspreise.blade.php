@extends('layouts.app')

@section('content')

<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">Preise</h3>
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
                        <ul class="nav justify-content-around" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="month nav-link" data-column_name="11" data-toggle="tab" href="#november" role="tab"
                                         aria-selected="false">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>November</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="month nav-link" data-column_name="12" data-toggle="tab" href="#dezember" role="tab"
                                        aria-controls="cricket" aria-selected="false">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Dezember</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="month nav-link" data-column_name="1" id="tennis-tab" data-toggle="tab" href="#januar" role="tab"
                                        aria-controls="tennis" aria-selected="false">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Januar</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="month nav-link" data-column_name="2"  data-toggle="tab" href="#februar" role="tab"
                                        aria-controls="bascketball" aria-selected="false">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Februar</span>
                                    </a>
                                </li>
                            </ul>
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
                                                        Preis 1
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        ZUG
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
                                                        Preis 2
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        ZUG
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
                                                        Preis 3
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        ZUG
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
                                                        Preis 4
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        ZUG
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
                                                        Preis 5
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="team-name-part">
                                                        ZUG
                                                    </div>
                                                </td>
                                            </tr>
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

@endsection
