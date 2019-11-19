@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <div class="card">
                    <div class="card-header">
                        {{ __('Import Users CSV') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.import-csv-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="import_csv" id="" class="form-control">
                            <input type="submit" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
