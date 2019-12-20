<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Apon Builders LTD</title>
    <link rel="icon" href="{{asset('/')}}assets/frontend/img/logo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700&display=swap" rel="stylesheet">

    <!-- fontwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- costom css -->
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/css/style.css">


</head>

<body>
<!-- header top -->
<div class="container-fluid" >
    <div class="row head">
        <div class="col-md-4 trow" >
            @foreach($emailNumber as $ename)
            <a href="mailto:aponbuilders@gmail.com"><img src="{{asset('/')}}assets/frontend/img/top/email.jpg" alt=""> {{$ename->a_email}}</a> &nbsp;
            <span>
             <img class="img-fluid pon" src="{{asset('/')}}assets/frontend/img/top/phone.jpg" alt=""> {{$ename->a_number}}</span>
            @endforeach
        </div>
        <div class="col-md-4" style="text-align: center;margin-top: -2px; padding-bottom: 3px;">
            @foreach($social as $icon)
            <a href="{{$icon->facebook}}" target="_blank"> <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/social_icon/facebook.jpg" alt=""> </a>
            <a href="{{$icon->instagram}}" target="_blank"> <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/social_icon/camera.jpg" alt=""> </a>
            <a href="{{$icon->pinterest}}" target="_blank"> <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/social_icon/instagram.jpg" alt=""></a>
            <a href="{{$icon->twitter}}" target="_blank"> <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/social_icon/twitter.jpg" alt=""></a>
            @endforeach
        </div>
        <div class="col-md-4 log">
            <a data-toggle="modal" data-target="#logModal" href="#" style="color: rgb(68, 129, 6);">Login</a> |
            <a data-toggle="modal" data-target="#regModal" href="#" style="color: rgb(68, 129, 6);">Sign Up</a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{'/'}}"><img src="{{asset('/')}}assets/frontend/img/logo.png"> </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar" >
            <ul class="navbar-nav ml-auto topnav" >
                <li class="nav-item">
                    <a class="nav-link" href="{{'/'}}"> <span class="sr-only">(current)</span> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/properties'}}">Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/agents'}}">Our Agents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/about'}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/contact'}}">Contact Us</a>
                </li>
            </ul>
        </div>

    </div>
</nav>