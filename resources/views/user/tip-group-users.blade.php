@extends('layouts.app')

@section('content')

<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">            {{$tipGroup->name}}

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
                                            @foreach($users as $user)
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
