@extends('layouts.app')
@section('title', 'Header')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">

        <h1 class="display-4">
            <center>Home</center>
        </h1>
        @if ( $hour >= 5 && $hour <= 11 ) <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Good Morning ,</h4>
    </div>
    @elseif ( $hour>= 12 && $hour <= 18 ) <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Good Afternoon ,</h4>
</div>
@elseif ( $hour>= 19 || $hour <= 4 ) <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Good Evening ,</h4>
    </div>
    @endif
    <p class="lead" style="margin-left: 84px;">Home Page Content</p>
    </div>
    </div> <a class="btn btn-primary btn-lg" style="float:right;" href="home" role="button">Go To About Us</a>
    @endsection

    @section('footer')
    <nav class="container navbar fixed-bottom navbar-light bg-light" style="text-align-last: center;">
        <a class="navbar-brand" href="#">© 2013-2020 {{$company}}.<br>Designed with </a>
    </nav>
    @endsection