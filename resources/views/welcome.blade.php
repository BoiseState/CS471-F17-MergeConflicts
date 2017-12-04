@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2 calender">
        Place Calender Here
        @foreach($events as $event)

            <div>{{$event->start->dateTime}}</div>


        @endforeach
    </div>
</div>
@endsection


