@extends('layouts.app')
@section('title', 'Header')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Home</h1>
        <p class="lead">Home Page Content</p>
    </div>
</div>
<a class="btn btn-primary btn-lg" style="float:right;" href="home" role="button">Go To About Us</a>
@endsection

@section('footer')
<nav class="container navbar fixed-bottom navbar-light bg-light" style="text-align-last: center;">
    <a class="navbar-brand" href="#">© 2013-2020 Nithra Apps India Pvt Ltd.<br>Designed with </a>
</nav>
@endsection