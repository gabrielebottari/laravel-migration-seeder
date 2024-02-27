@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

    <h1>Train Schedule for Today</h1>
    @foreach ($todayTrains as $train)
        <div>
            <p>{{ $train->company }} - {{ $train->train_code }}</p>
            <p>From: {{ $train->departure_station }} at {{ $train->departure_time }}</p>
            <p>To: {{ $train->arrival_station }} at {{ $train->arrival_time }}</p>
            <p>Status: {{ $train->on_time ? 'On Time' : 'Delayed' }}{{ $train->cancelled ? ', Cancelled' : '' }}</p>
        </div>
    @endforeach

@endsection