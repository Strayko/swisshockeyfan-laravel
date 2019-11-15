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


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Tip Group Users List')}}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Points</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ ++$count }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->points }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Sidebar') }}</div>
                    <div class="card-body">
                        <ul>
                            <li><a href="/user/tip-group-user-list">Individual Tip Group List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
