@extends('layouts.app')

@section('content')

<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">Rangliste Einzeln

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
                            <a class="nav-link" id="bascketball-tab" data-toggle="tab" href="#bascketball" role="tab"
                                aria-controls="bascketball" aria-selected="false">
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
                            <div class="play-table-part">
                                <div class="play-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="team-name" width="15%">Position</th>
                                                <th class="team-name" rowspan="1" width="30%">First Name</th>
                                                <th class="team-name" width="40%">Last Name</th>
                                                <th class="team-name">Points</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sortedUsers as $user)
                                            <tr>
                                                <td>
                                                   <div class="team-name-part">
                                                   {{ ++$count }}
                                                   </div> </td>
                                                <td><div class="team-name-part">
                                                    {{ $user->first_name }}
                                                </div> </td>
                                                <td>
                                                    <div class="team-name-part">
                                                    {{ $user->last_name }}
                                                    </div>    
                                                </td>
                                                <td> <div class="team-name-part" style="font-weight:800; font-size:18px">
                                                {{ $user->points }}
                                                </div>
                                                    </td>
                                            </tr>
                                            @endforeach
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