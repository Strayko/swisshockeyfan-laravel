@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            {!! Form::open(['method'=>'POST', 'action'=>'ContactController@sendEmail']) !!}
                            <input type="hidden" name="finished" id="finished" value="1">
                            <div class="form-group">
                                <label for="name">Name:</label><br>
                                {!! Form::text('name', null, ['id'=>'name', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label><br>
                                {!! Form::email('email', null, ['id'=>'email', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject:</label><br>
                                {!! Form::text('subject', null, ['id'=>'subject', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="body">Body:</label><br>
                                {!! Form::textarea('body', null, ['id'=>'body', 'class' => 'form-control']) !!}
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
