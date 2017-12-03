<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adopt-A-Meal</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

        <body>
        <div class="">
            <nav class="navbar top-menu">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-left" href="{{url('http://interfaithsanctuary.org/')}}">
                            <img class="brand" alt="Brand" src="images/Interfaith-Temp-Logo.png">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse"  id="app-navbar-collapse">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                        <ul class="nav navbar-nav navbar-center">
                            <li><a class="navbar-brand" href="/">Adopt-a-Meal</a></li>
                        </ul>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                                <li><a href="#">Calendar View</a></li>
                                <li><a href="#">Meal Ideas</a></li>
                            @else
                                <li><a href="#">Calendar View</a></li>
                                <li><a href="#">Meal Ideas</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
            {{--<div class="container">--}}
                {{--<div class="col-md-8 col-md-offset-2 calender">--}}
                    {{--Place Calender Here--}}
                    {{--@foreach($events as $event)--}}

                        {{--<div>{{$event->start->dateTime}}</div>--}}


                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            @yield('content')
        </div>
        </body>
</html>


