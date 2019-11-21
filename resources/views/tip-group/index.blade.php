@extends('layouts.app')

@section('content')
<!-- banner-section start -->
<section class="breadcum-section">
    <div class="breadcum-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcum-content text-center">
                        <h3 class="title">{{__('Tippgruppen')}}

                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<section class="registration-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="play-table-part">
                    <div class="play-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="team-name">Tippgruppe</th>
                                    <th class="team-name"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tipGroups as $tipGroup)
                                {{--                            {{ dd(Auth::user()->tip_group_id) }}--}}
                                @if($tipGroup->id == Auth::user()->tip_group_id)
                                <tr>
                                    {!! Form::open(['method'=>'PATCH', 'action'=>['TipGroupController@update',
                                    $tipGroup->id]]) !!}
                                    <input type="hidden" name="tip_group_id" value="0">
                                    <td>
                                        <div class="team-name-part">
                                            {{ $tipGroup->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="team-name-part tip-group-link">
                                            <input type="submit" value="Tippgruppe verlassen"
                                                class="single-item submit-button submit-tippgroup">
                                        </div>
                                    </td>
                                    {!! Form::close() !!}
                                </tr>
                                @else
                                <tr>
                                    {!! Form::open(['method'=>'PATCH', 'action'=>['TipGroupController@update',
                                    $tipGroup->id]]) !!}
                                    <input type="hidden" name="tip_group_id" value="{{ $tipGroup->id }}">
                                    <td>
                                        <div class="team-name-part">
                                            {{ $tipGroup->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="team-name-part tip-group-link">
                                            @if(Auth::user()->tip_group_id == 0)
                                            <input type="submit" value="Tippgruppe Beitreten"
                                                class="single-item submit-button submit-tippgroup">
                                            @else
                                            <input value="Tippgruppe Beitreten"
                                                class="single-item submit-button submit-tippgroup" disabled>
                                            @endif
                                        </div>
                                    </td>
                                    {!! Form::close() !!}
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
</section>
@endsection
