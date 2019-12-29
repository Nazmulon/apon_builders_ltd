@include('layouts.frontend.include.header')


    <!-- nevber end -->
    <div class="back2">
        <div class="container text-center">
            <h1 class="agent">Agent List</h1>
        </div>
    </div>

    <div class="container">
      
        <br>
        <!-- properties -->
        <div class="container card bg-light">
            <br>
            @foreach ($agents as $agent)
            <div class="row text-center">
                @foreach ($agents as $item)
                    <div class="col-md-4">
                        <div class="card mb-2">
                        <a href="{{route('single_agents',$item->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/agents/{{$item->image}}" style="width: 100%; height: 250px;"></a>
                        </div>
                    </div>  
                    <div class="col-md-2">
                        <h4 class="card-title font-weight-bold text-center" style="padding-top: 5px;">{{$item->name}}</h4>
                        <p class="card-text text-center" style="color:black;">{{$item->description}}</p>
                        <div class="row aicon">
                            <ul class="list-group text-left">
                                <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> {{$item->location}} </li>
                                <li class="list-group-item"><a href="mailto:"><i class="fas fa-envelope-square"></i> {{$item->email}}</a></li>
                                <li class="list-group-item"><i class="fas fa-phone-alt"></i> {{$item->number}}</li>
                            </ul> 
                        </div>
                        <div class="row asocil">
                            <a href="">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/facebook.jpg" alt="">
                            </a>
                            <a href="">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/camera.jpg" alt="">
                            </a>
                            <a href="">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/instagram.jpg" alt="">
                            </a>
                            <a href="">
                                <img src="{{asset('/')}}assets/frontend/img/social_icon/twitter.jpg" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
                
            </div>
            @endforeach


        </div>

    </div>
  

    <!-- end container -->
    <br><br><br>
    <!-- footer -->
    @include('layouts.frontend.include.footer')
