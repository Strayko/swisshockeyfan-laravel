@extends('layouts.app')

@section('content')
    @if(session()->has('error'))
        <p>{{session()->get('error')}}</p>
    @endif
    <div>
        <ul>
            <li><a href="">All2</a></li>
            <li><a href="">Novembar</a></li>
            <li><a href="">Decembar</a></li>
        </ul>
    </div>
@endsection
