@extends('layouts.app')

@section('scripts')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Adopt-A-Meal</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css' />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.js'></script>

    <script>
      $(document).ready(function() {
        $('#calendar').fullCalendar({
          showNonCurrentDates: false,
          contentHeight : "auto",
          height: 'parent' +80 ,
          aspectRatio: 1.5,
          themeSystem: 'bootstrap3'
        });
      });
    </script>
    
@endsection

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-2 calendar">
        <div id="calendar"></div>
    </div>
</div>
@endsection


