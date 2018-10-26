@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" id="info-wrapper">
            <div class="card card-default">
                <div class="card-header">Calculator</div>

                <div class="card-body">
                    <form-element action="{{ url('/test') }}"></form-element>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
