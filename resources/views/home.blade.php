@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <div class="bg-warning-subtle mb-5">
        <h2 class="text-primary text-center py-3">Train Schedule for Today: {{ $todayDate }}</h2>
    </div>
    <div class="row">
        @foreach ($todayTrains as $train)
            <div class="col-md-4">
                <div class="card mb-4 bg-warning-subtle">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $train->company }} - {{ $train->train_code }}</h5>
                        <div class="card-info py-2">
                            <p class="card-text">From: {{ $train->departure_station }} at {{ $train->departure_time }}</p>
                            <p class="card-text">To: {{ $train->arrival_station }} at {{ $train->arrival_time }}</p>
                            <p class="card-text">Status: {{ $train->on_time ? 'On Time' : 'Delayed' }}{{ $train->cancelled ? ', Cancelled' : '' }}</p>
                            <p class="card-text">Date: {{ $train->ticket_date }}</p>
                        </div>

                        <div class="button-container py-3">
                            <a href="#" class="btn btn-primary text-center">
                                <span class="text-warning-subtle fw-bold">Book Now <i class="fa-solid fa-arrow-right-to-bracket"></i></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection