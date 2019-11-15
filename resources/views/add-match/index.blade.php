@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Match') }}</div>
                    <div class="card-body">
                        {!! Form::open(['method'=>'POST', 'action'=>'AddingMatchController@store']) !!}
                        @csrf
                        <div class="form-group row">
                            <label for="home_team" class="col-md-4 col-form-label text-md-right">{{ __('Home team') }}</label>
                            <div class="col-md-6">
                                <input id="home_team" type="text" class="form-control @error('home_team') is-invalid @enderror" name="home_team" value="{{ old('home_team') }}" required autocomplete="home_team" autofocus>
                                @error('home_team')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="away_team" class="col-md-4 col-form-label text-md-right">{{ __('Away team') }}</label>
                            <div class="col-md-6">
                                <input id="away_team" type="text" class="form-control @error('away_team') is-invalid @enderror" name="away_team" value="{{ old('away_team') }}" required autocomplete="away_team" autofocus>
                                @error('away_team')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('Place') }}</label>
                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') }}" required autocomplete="place" autofocus>
                                @error('place')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_play" class="col-md-4 col-form-label text-md-right">{{ __('Date play') }}</label>
                            <div class="col-md-6">
                                <input id="date_play" type="datetime-local" class="form-control @error('date_play') is-invalid @enderror" name="date_play" value="{{ old('date_play') }}" required autocomplete="date_play" autofocus>
                                @error('date_play')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Match') }}
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Sidebar') }}</div>
                <div class="card-body">
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
