@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Tip Group List')}}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tip Group Name</th>
                                <th>Points</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userPoints as $points)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $points['name'] }}</td>
                                    <td>{{ $points['points'] }}</td>
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
                        @include('includes.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
