@extends('layouts.app')
@section('title', 'Create Data')

@section('header')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Create Data</h1>
    </div>
</div>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">
            <center>Create Data</center>
        </h1>
        <form method="post" action="/create">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" aria-describedby="Title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea type="text" class="form-control" name="desc" aria-describedby="Desc" placeholder="Enter Description"></textarea>
            </div>
            <button type="submit" class="btn btn-success" style="float: right;" name="save">Save</button>

        </form>
    </div>
</div>
@endsection

@section('footer')
<nav class="container navbar fixed-bottom navbar-light bg-light" style="text-align-last: center;">
    <a class="navbar-brand" href="#">© 2013-2020 {{$company}}.<br>Designed with </a>
</nav>
@endsection