@include('layouts.frontend.include.header')


    <!-- nevber end -->
    <div class="back4">
        <div class="container text-center">
            <h1 class="single-properties">Agent Details</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <!-- agent detiles -->

        <!-- end agent detiles -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/agents/{{$agents->image}}" style="width: 100%; height: 350px;">   
                    </div>
                </div>
                <div class="col-md-4 bg-light">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-center">{{$agents->name}}</h4>
                        <p class="card-text text-center" style="color:black;">{{$agents->description}}</p>
                        <div class="row ">
                            <ul class="s_agents">
                                <li class="list-group-item "><img src="{{asset('/')}}assets/frontend/img/map/location.jpg"> {{$agents->location}} </li>
                                <li class="list-group-item "><a href="mailto:"> <img src="{{asset('/')}}assets/frontend/img/map/msg.jpg"> {{$agents->email}}</a></li>
                                <li class="list-group-item "><img src="{{asset('/')}}assets/frontend/img/map/pho.jpg"> {{$agents->number}}</li>
                            </ul>
                            
                        </div>
                        <div class="row social">
                            <a href="{{$agents->facebook}}">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/facebook.jpg" alt="">
                            </a>
                            <a href="{{$agents->instagram}}">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/camera.jpg" alt="">
                            </a>
                            <a href="{{$agents->pinterest}}">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/instagram.jpg" alt="">
                            </a>
                            <a href="{{$agents->twitter}}">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/twitter.jpg" alt="">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

        <br>
        <!--similar properties -->

        <div class="container">
            <h2>Featured Properties</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="container card bg-light">
                    <div class="carousel-inner">
                        @foreach($users as $f_property)
                        <div class="carousel-item py-5 @if($loop->first) active @endif">
                            <div class="row">
                                @foreach ($users->random(3) as $f_item)
                                <div class="col-sm-4 col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <div class="card-body"> 
                                            <div class="ps-badge"><span>{{$f_item->sale_both}}</span></div>
                                            <a href="{{route('single_properties',$f_item->id )}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/futerproperties/{{$f_item->image}}" alt=""> </a>
                                            <div class="dolor">${{$f_item->price}}</div>
                                            <h5 class="card-title text-center" style="padding-top: 15px;">{{$f_item->title}}</h5>
                                            <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> {{$f_item->location}}</p>
                                            
                                            <div class="row">
                                                <div class="col">Area</div>
                                                <div class="col">Beds</div>
                                                <div class="col">Baths</div>
                                                <div class="col">Garage</div>
                                            </div>
                                            <div class="row text-center" style="font-size: 10px;">
                                                <div class="col">{{$f_item->area}}</div>
                                                <div class="col">{{$f_item->beds}}</div>
                                                <div class="col">{{$f_item->baths}}</div>
                                                <div class="col">{{$f_item->garage}}</div>
                                            </div>
                                            <i class="fas fa-user"></i> {{$f_item->name}} 
                                            <i class="far fa-calendar-alt ele ion"></i> {{$f_item->date}}
                                        </div>
                                    </div>
                                </div> 
                                @endforeach
                                
                                   
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br><br>
        <!--end container  -->
        <!-- contact form -->
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class=" text-center">
                        <h1 style="margin-top: -12px;">Contact To Agent</h1>
                        <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/about_us/who.jpg" alt="">
                    </section>
                </div>
            </div> --}}
            <!-- contact form -->
        {{-- <form action="{{route('agents.index')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
              </div>
              <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
              </div>
          </div>
          <br>
          <div class="form-row">
            <div class="col-md-12">
              <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="message..." required></textarea>
          </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success mt-4 btn-lg">SEND NOW</button>
        </form> --}}
  
  
  <!-- end form -->
  
</div>
<!-- end contact form -->
<!-- end properties -->

</div>
<!-- end container -->
<br><br><br>
<!-- footer -->
@include('layouts.frontend.include.footer')
