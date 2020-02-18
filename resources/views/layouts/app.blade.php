<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nithra - @yield('title')</title>
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            /* background-color: #fff; */
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
        }

        .bg-light {
            background-color: #1abce0 !important;
        }

        a {
            color: #e4e7ea;
        }

        .buttonalign {
            margin-top: 15px;
            text-align: -webkit-center;
        }
    </style>

</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <span style="color:rgba(255, 16, 16, 0.9);"> Nithra </span>
        </a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post">Blog</a>
                </li>
            </ul>
            <span class="navbar-text">
                <span style="color:rgba(255, 16, 16, 0.9);"> Website: </span> www.nithra.mobi
                <span style="color:rgba(255, 16, 16, 0.9);"> E-mail: </span> info@nithra.mobi
            </span>
        </div>
    </nav>


    <div class="container" style="margin-top: 28px;    min-height: max-content;">
        @yield('content')
    </div>
    <div class="container">
        <p class="buttonalign">
            <button class="btn btn-success" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Mobile App Development</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Web Development</button>
            <button class="btn btn-warning" type="button" data-toggle="collapse" role="button" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Web Designing</button>
            <button class="btn btn-info" type="button" data-toggle="collapse" role="button" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Social Media and Digital Marketing</button>
        </p>
        <div class="row">
            <div class="col-md-3">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        You decide your needs, We deliver as an App.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        Take charge of the online world with Web Development, Move your business to the next level.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div class="card card-body">
                        To get your website accessible on the endless screens.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <div class="card card-body">
                        Get More Traffic, Awareness and Engagement.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <nav class="navbar  navbar-expand-lg navbar-light bg-light" style="text-align-last: center;">
            <a class="navbar-brand" href="#">
                <p style="color: azure;margin: inherit;">© 2013-2020 Nithra Apps India Pvt Ltd.<br>Designed with </p>
            </a>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>