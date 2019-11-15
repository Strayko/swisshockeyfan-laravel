@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tip Groups') }}</div>
                    <div class="card-body">
                        @foreach($tipGroups as $tipGroup)
{{--                            {{ dd(Auth::user()->tip_group_id) }}--}}
                            @if($tipGroup->id == Auth::user()->tip_group_id)
                                {!! Form::open(['method'=>'PATCH', 'action'=>['TipGroupController@update', $tipGroup->id]]) !!}
                                <input type="hidden" name="tip_group_id" value="0">
                                <div class="col-md-8">
                                    <h3>{{ $tipGroup->name }}</h3>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" value="Leave" class="btn btn-primary">
                                </div>
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method'=>'PATCH', 'action'=>['TipGroupController@update', $tipGroup->id]]) !!}
                                <input type="hidden" name="tip_group_id" value="{{ $tipGroup->id }}">
                                <div class="col-md-8">
                                    <h3>{{ $tipGroup->name }}</h3>
                                </div>
                                <div class="col-md-4">
                                    @if(Auth::user()->tip_group_id == 0)
                                        <input type="submit" value="Join" class="btn btn-primary">
                                    @else
                                        <input value="Join" class="btn btn-primary" disabled>
                                    @endif
                                </div>
                                {!! Form::close() !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Sidebar') }}</div>
                    <div class="card-body">
                        @include('includes.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
