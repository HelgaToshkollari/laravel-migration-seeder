@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($trains as $train)
            <li>Company:{{$train->company}} </li>
            <li>Departure station: {{$train->departure_station}} </li>
            <li>Arrival station: {{$train->arrival_station}} </li>
            <li>Departure time: {{$train->departure_time}} </li>
        @endforeach
    </ul>
   
@endsection