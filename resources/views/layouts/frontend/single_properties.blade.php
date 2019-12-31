@include('layouts.frontend.include.header')


    <!-- nevber end -->
    <div class="back3">
        <div class="container text-center">
            <h1 class="single-properties">Property Details</h1>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section >
                        <div class="card-body text-center">
                            <h2>Relaxing Apartment</h2>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        

        <!-- relaxig apartment carisal -->
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <ul class="list-group">
                    <li class="list-group-item"><span class="badge badge-success badge-pill">{{$featurproperty->price}}</span></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item" style="color:#71B100"><i class="fas fa-map-marker-alt"> {{$featurproperty->location}}</i></li>
                    </ul>
                    
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="badge badge-success badge-pill"> {{$featurproperty->sale_both}}</span></li>
                    </ul>
                </div>
            </div>
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                            <!-- slides -->
                            <div class="carousel-inner">
                                @foreach ($property as $p_item)
                                <div class="carousel-item @if($loop->first) active @endif"> 
                                    <img src="{{asset('/')}}assets/frontend/img/futerproperties/property/{{$p_item->image}}"> 
                                    </div>
                                @endforeach
                            </div> <!-- Left right --> 
                            <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                            <ol class="carousel-indicators list-inline">
                                @foreach ($property as $key => $item)
                                <li class="list-inline-item  @if($loop->first) active @endif"> 
                                <a id="carousel-selector-0" class="selected" data-slide-to="{{$key}}" data-target="#custCarousel"> 
                                        <img src="{{asset('/')}}assets/frontend/img/futerproperties/property/{{$item->image}}" class="img-fluid">
                                    </a> 
                                </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br><br><br>
        <!-- end carisal -->
        <div class="container">
            <h2>Description</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>{{$featurproperty->description}}</p>
                </div>
            </div>

            <h2>Features</h2>
            <div class="row">
                @foreach ($features as $item)
                    
                <div class="col-md-4">
                    <ul class="list-group">
                    <li class="list-group-item "><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_1}}</li>
                        <li class="list-group-item"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_2}}</li>
                        <li class="list-group-item "><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_3}}</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_4}}</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_5}}</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_6}}</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_7}}</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_8}}</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">{{$item->featuer_9}}</li>
                    </ul>
                </div>
                @endforeach

            </div>
        </div>
        <br>
        <div class="container">
            <h2>Floor Plans</h2>
            <div class="table-responsive-sm">          
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Size</th>
                      <th>Room</th>
                      <th>Bathrooms</th>
                      <th>Garage</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$featurproperty->area}}</td>
                  <td>{{$featurproperty->beds}}</td>
                  <td>{{$featurproperty->baths}}</td>
                  <td>{{$featurproperty->garage}}</td>
              </tr>
          </tbody>
      </table>
  </div>
</div>
<br>
<!--similar properties -->

<div class="container">
    <h2>Similar Properties</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="container card bg-light">

            <div class="carousel-inner">
                @foreach ($users as $s_property)
                    <div class="carousel-item py-5 @if($loop->first) active @endif">
                        <div class="row">
                        @foreach ($users->random(3) as $s_item)
                            <div class="col-sm-4 col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <div class="ps-badge"><span>{{$s_item->sale_both}}</span></div>
                                    <a href="{{route('single_properties', $s_item->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/futerproperties/{{$s_item->image}}" > </a>
                                        <div class="dolor">${{$s_item->price}}</div>
                                        <h5 class="card-title text-center" style="padding-top: 15px;"> {{$s_item->title}}</h5>
                                        <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> {{$s_item->location}}</p>
                                        <div class="row">
                                            <div class="col">Area</div>
                                            <div class="col">Beds</div>
                                            <div class="col">Baths</div>
                                            <div class="col">Garage</div>
                                            <div class="col">{{$s_item->area}}</div>
                                            <div class="col">{{$s_item->beds}}</div>
                                            <div class="col">{{$s_item->baths}}</div>
                                            <div class="col">{{$s_item->garage}}</div>
                                        </div>
                                        <i class="fas fa-user"></i> {{$s_item->name}} 
                                        <i class="far fa-calendar-alt ele ion" ></i> {{$s_item->date}}
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

<!--end container  -->
<!-- end properties -->

</div>
<!-- end container -->
<br><br><br>
<!-- footer -->
@include('layouts.frontend.include.footer')
