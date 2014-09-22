@extends('layouts.default')

@section('title')
Phrases counter
@stop

@section('content')
    <div class="container">
        <div class="row">
            <h1>The work is done</h1>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="alert alert-success" role="alert">
                    <p>Your number of substring occurrences equals: <strong>{{ $count }}</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            {{ link_to_route('home', 'Home page') }}
        </div>
    </div>
@stop