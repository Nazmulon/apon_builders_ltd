@extends('layouts.frontend.app')

@section('content')

<div class="modal" id="logModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center">Log In</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="POST">
                    <label class="sr-only" for="usrname">Username</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                    <label class="sr-only" for="Password">Name</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                        </div>
                        <input id="Password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Log In">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end login form -->
<!-- sign in form -->
<div class="modal" id="regModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="POST">

                    <label class="sr-only" for="fullname">Full Name</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Full Name" aria-label="fullname" aria-describedby="basic-addon2">
                    </div>

                    <label class="sr-only" for="usrname">Username</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="User Name" aria-label="usrname" aria-describedby="basic-addon2">
                    </div>

                    <label class="sr-only" for="email">Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-envelope-square"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon2">
                    </div>

                    <label class="sr-only" for="phone">Phone</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Number" aria-label="phone" aria-describedby="basic-addon2">
                    </div>


                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                        </div>
                        <input id="Password" type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon2">
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Sign Up">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end sign form -->

<!-- header image -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
        @foreach ($sliders->take(5) as $slider)
        <div class="carousel-item @if($loop->first) active @endif">
        <img class="img-fluid" src="{{ URL::to('/') }}/assets/frontend/img/slider/{{ $slider->image }}" alt="Los Angeles">
            <div class="container">
                <div class="carousel-caption text-center">
                <h1>{{$slider->title}}</h1>
                    <p>{{$slider->description}}</p>
                    
                </div>
            </div>
        </div>  
        @endforeach
        
       
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <!-- Left and right controls -->

    <!-- header image end -->
</div>

<!-- main content area -->
    <div class="container">
        <!-- progress bar -->
        <div class="card up">
            <div class="card-body">
            <form action="{{route('search.result')}}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <select name="area"  class="form-control">
                                <option value="" hidden>From Area</option>
                                @foreach ($featurproperty as $item)
                                <option value="{{$item->id}}">{{$item->area}}</option>  
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-md-3">
                            <select name=""  class="form-control">
                                <option value="" hidden>Any Status</option>
                                @foreach ($featurproperty as $s_item)
                            <option value="{{$s_item->id}}">{{$s_item->}}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="col-md-4">
                            <select name="category_name" class="form-control">
                                <option value="" hidden>All Types </option>
                                @foreach ($categories as $item)
                                <option value="{{$item->category_id}}">{{$item->category_name}}</option>                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="beds" class="form-control">
                                <option value="" hidden>Bedroom</option>
                                @foreach ($featurproperty as $item)
                                <option value="{{$item->id}}">{{$item->beds}}</option>                                   
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <select name="baths" class="form-control">
                                <option value="" hidden>Bathroom</option>
                                @foreach ($featurproperty as $item)
                                <option value="{{$item->id}}">{{$item->baths}}</option>                                   
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="location" hidden>Location</option>
                                @foreach ($featurproperty as $item)
                                <option value="{{$item->id}}">{{$item->location}}</option>                                   
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-md-3 d-flex justify-content-center my-2">
                            <span class="font-weight-bold indigo-text mr-2 mt-1">0</span>
                            <form class="range-field my-4 w-25">
                                <input class="form-control" type="range" min="0" max="1500" />
                            </form>
                            <span class="font-weight-bold indigo-text ml-2 mt-1">1500</span>
                        </div> --}}
                        <div class="col-md-4">
                            <input class="btn btn-success form-control" type="submit" name="submit" value="Search">

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
<!-- end progress bar -->


<!-- Featured Properties -->

<div class="container">
    <br><br>
    <div class="row cal2">
        <div class="col-md-12">
            <section class=" text-center">
                <h2>Featured Properties</h2>
                <p style="color: darkgreen;">Find your properties in your city</p>
            </section>
        </div>
    </div>

    <!-- <div class="album py-5 bg-light"> -->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($featurproperty as $fproperty)
                <div class="carousel-item py-5 @if($loop->first) active @endif">
                    <div class="row size">
                        @foreach ($featurproperty->random(3) as $item)
                        <div class="col-sm-4 col-md-4 slid">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                <div class="ps-badge"><span>{{$item->sale_both}}</span></div>
                                <a href="{{route('single_properties',$item->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/futerproperties/{{$item->image}}" alt=""> </a>
                                    <!-- <div class="sale">Sale</div> -->
                                    <div class="dolor">${{$item->price}}</div>
                                    <h5 class="card-title text-center" style="padding-top: 15px;">{{$item->title}}</h5>
                                    <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> {{$item->location}}</p>

                                    <div class="row">
                                        <div class="col">Area</div>
                                        <div class="col">Beds</div>
                                        <div class="col">Baths</div>
                                        <div class="col">Garage</div>
                                    </div>
                                    <div class="row text-center" style="font-size: 10px;">
                                        <div class="col">{{$item->area}}</div>
                                        <div class="col">{{$item->beds}}</div>
                                        <div class="col">{{$item->baths}}</div>
                                        <div class="col">{{$item->garage}}</div>
                                    </div>
                                    <i class="fas fa-user"></i> {{$item->name}}
                                    <i class="far fa-calendar-alt ele" ></i> {{$item->date}}
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            <div>
            </div>
        </div>
    </div>
    <!-- slider 2 fature image -->
    <div class="container" style="margin-top: -90px;">
        <div id="demo1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($featurproperty as $property)

                <div class="carousel-item py-5 @if($loop->first) active @endif">
                    <div class="row size">
                        @foreach ($featurproperty->random(3) as $proper)
                        <div class="col-sm-4 col-md-4 slid">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="ps-badge"><span>{{$proper->sale_both}}</span></div>
                                    <a href="{{route('single_properties',$proper->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/futerproperties/{{$proper->image}}" alt=""> </a>
                                    <div class="dolor">${{$proper->price}}</div>
                                    <h5 class="card-title text-center" style="padding-top: 15px;">{{$proper->title}}</h5>
                                    <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> {{$proper->location}}</p>

                                    <div class="row">
                                        <div class="col">Area</div>
                                        <div class="col">Beds</div>
                                        <div class="col">Baths</div>
                                        <div class="col">Garage</div>
                                    </div>
                                    <div class="row text-center" style="font-size: 10px;">
                                        <div class="col">{{$proper->area}}</div>
                                        <div class="col">{{$proper->beds}}</div>
                                        <div class="col">{{$proper->baths}}</div>
                                        <div class="col">{{$proper->garage}}</div>
                                    </div>
                                    <i class="fas fa-user"></i> {{$proper->name}}
                                    <i class="far fa-calendar-alt ele" ></i> {{$proper->date}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
               
            </div>
            <a class="carousel-control-prev" href="#demo1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#demo1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- </div> -->

    <!-- Left and right controls -->
    <!-- agents proterty -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-12">
                <section class=" text-center">
                    <h2>Our Agent</h2>
                    <p style="color: rgb(99, 185, 99);">We have professional agents</p>
                </section>
            </div>
        </div>

        <!-- example -->
        <section id="multi-item-carousel-v2">
            <!--Section: Live preview-->
            <section class="section-preview text-center">

                <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-multi" data-slide-to="1"></li>
                        <li data-target="#carousel-example-multi" data-slide-to="2"></li>
                        <li data-target="#carousel-example-multi" data-slide-to="3"></li>
                        <li data-target="#carousel-example-multi" data-slide-to="4"></li>
                        <li data-target="#carousel-example-multi" data-slide-to="5"></li>
                    </ol>
                    <!--/.Indicators-->

                    <div class="carousel-inner v-2" role="listbox">
                        @foreach ($agents as $agent)
                        <div class="carousel-item py-5 @if($loop->first) active @endif">
                            <div class="row">
                                @foreach ($agents->random(2) as $agn)
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                    <a href="{{route('single_agents',$agn->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/agents/{{$agn->image}}" style="width: 100%; height: 250px;"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 bg-light">
                                    <h4 class="card-title font-weight-bold text-center" style="padding-top: 5px;">{{$agn->name}}</h4>
                                    <p class="card-text text-center" style="color:black;">{{$agn->description}}</p>
                                    <div class="row aicon">
                                        <ul class="list-group text-left">
                                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> {{$agn->location}} </li>
                                            <li class="list-group-item"><a href="mailto:"><i class="fas fa-envelope-square"></i> {{$agn->email}}</a></li>
                                            <li class="list-group-item"><i class="fas fa-phone-alt"></i> {{$agn->number}}</li>
                                        </ul>
                                    </div>
                                    <div class="row asocil">
                                        <a href="{{$agn->facebook}}">
                                            <img src="{{asset('/')}}assets/frontend/img/social_icon/facebook.jpg" alt="">
                                        </a>
                                        <a href="{{$agn->instagram}}">
                                            <img src="{{asset('/')}}assets/frontend/img/social_icon/camera.jpg" alt="">
                                        </a>
                                        <a href="{{$agn->pinterest}}">
                                            <img src="{{asset('/')}}assets/frontend/img/social_icon/instagram.jpg" alt="">
                                        </a>
                                        <a href="{{$agn->twitter}}">
                                            <img src="{{asset('/')}}assets/frontend/img/social_icon/twitter.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div> 
                        @endforeach
                        
                    </div>

                </div>

            </section>
            <!--Section: Live preview-->
        </section>

        <!-- end example -->

    </div>

    <!-- end agents property -->
    <!-- first contaner end -->
</div>

</div>
</div>

</div>
<!-- row 2 -->

<!-- end row -->
</div>
</div>
<br><br>

<!-- Map proterty -->
<div class="row">
    <div class="col">
        <section class=" text-center">
            <h2>Office Address</h2>
        </section>
    </div>
</div>
<br>
<section>
    <p style="background-color: #71B100; text-align: center; padding: 5px;">79 Outer Circular Road, 2nd Floor, Boro MogBazar, Dhaka-1217, Bangladesh </p>
    <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9465269200828!2d90.40374661445581!3d23.749286194736978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88f0cdd7811%3A0x8e7d625b0199e67d!2s2nd%20Floor%2C%2079%20Outer%20Circular%20Rd%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1575979810611!5m2!1sen!2sbd" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </p>
    <!-- <img class="img-fluid" style="width:100%" src="resources/img/map/map.jpg" alt="map"> -->
</section>
    
@endsection
