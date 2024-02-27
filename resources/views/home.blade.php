@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container mt-5">
    <div class="row">
        @foreach ($todayTrains as $train)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->company }} - {{ $train->train_code }}</h5>
                        <p class="card-text">From: {{ $train->departure_station }} at {{ $train->departure_time }}</p>
                        <p class="card-text">To: {{ $train->arrival_station }} at {{ $train->arrival_time }}</p>
                        <p class="card-text">Status: {{ $train->on_time ? 'On Time' : 'Delayed' }}{{ $train->cancelled ? ', Cancelled' : '' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection