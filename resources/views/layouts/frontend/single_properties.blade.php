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
                    <li class="list-group-item"><span class="badge badge-success badge-pill">${{$featurproperty->price}}</span></li>
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
                                <div class="carousel-item active"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_1.jpg"> </div>
                                <div class="carousel-item"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_2.jpg"> </div>
                                <div class="carousel-item"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_3.jpg"> </div>
                                <div class="carousel-item"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_4.jpg"> </div>
                                <div class="carousel-item"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_5.jpg"> </div>
                                <div class="carousel-item"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_6.jpg"> </div>
                            </div> <!-- Left right --> 
                            <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                            <ol class="carousel-indicators list-inline">
                                <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_1.jpg" class="img-fluid"> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_2.jpg" class="img-fluid"> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_3.jpg" class="img-fluid"> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_4.jpg" class="img-fluid"> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="4" data-target="#custCarousel"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_5.jpg" class="img-fluid"> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="5" data-target="#custCarousel"> <img src="{{asset('/')}}assets/frontend/img/single_property/single_property_6.jpg" class="img-fluid"> </a> </li>
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
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, perspiciatis. Numquam in quod dolorem quam quisquam, aperiam, labore aliquid doloribus earum odit, dolor fugit asperiores. Accusantium corporis eum autem hic.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, perspiciatis. Numquam in quod dolorem quam quisquam, aperiam, labore aliquid doloribus earum odit, dolor fugit asperiores. Accusantium corporis eum autem hic.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas id in, vero at fugit sit iste minima itaque aliquid doloremque odio nostrum soluta ullam! Quidem incidunt optio repudiandae nam assumenda.
                    </p>
                </div>
            </div>

            <h2>Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item "><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Air Conditioning</li>
                        <li class="list-group-item"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Parking</li>
                        <li class="list-group-item "><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Gym</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Wifi</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Garage</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Electric</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Telephone</li>
                        <li class="list-group-item d-flex"><img src="{{asset('/')}}assets/frontend/img/properties/checkmark.jpg">Security</li>
                    </ul>
                </div>
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
                  <td> {{$featurproperty->area}}</td>
                  <td> {{$featurproperty->beds}}</td>
                  <td> {{$featurproperty->baths}}</td>
                  <td> {{$featurproperty->garage}}</td>
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
                @foreach ($featurproperty as $item)
                    <div class="carousel-item py-5 @if($loop->first) active @endif">
                        <div class="row">
                            @foreach ($featurproperty as $property)
                            <div class="col-sm-4 col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <div class="ps-badge"><span>{{$property->sale_both}}</span></div>
                                    <a href="{{route('single_properties',$property->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/futerproperties/{{$property->image}}" > </a>
                                        <div class="dolor">${{$property->price}}</div>
                                        <h5 class="card-title text-center" style="padding-top: 15px;"> {{$property->title}}</h5>
                                        <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> {{$property->location}}</p>
                                        
                                        <div class="row">
                                            <div class="col">Area</div>
                                            <div class="col">Beds</div>
                                            <div class="col">Baths</div>
                                            <div class="col">Garage</div>
                                            <div class="col">{{$property->area}}</div>
                                            <div class="col">{{$property->beds}}</div>
                                            <div class="col">{{$property->baths}}</div>
                                            <div class="col">{{$property->garage}}</div>
                                        </div>
                                        <i class="fas fa-user"></i> {{$property->name}} 
                                        <i class="far fa-calendar-alt ele ion" ></i> {{$property->date}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="col-sm-4 col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <div class="ps-badge"><span>Sale</span></div>
                                        <a href="single_property.html"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/feture_img/image_4.jpg" alt=""> </a>
                                        <div class="dolor">$50,000</div>
                                        <h5 class="card-title text-center" style="padding-top: 15px;">Relaxing Apartment</h5>
                                        <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> 123 Kathal St. Tampa City</p>
                                        
                                        <div class="row">
                                            <div class="col">Area</div>
                                            <div class="col">Beds</div>
                                            <div class="col">Baths</div>
                                            <div class="col">Garage</div>
                                            <div class="col">3600</div>
                                            <div class="col">4</div>
                                            <div class="col">3</div>
                                            <div class="col">1</div>
                                        </div>
                                        <i class="fas fa-user"></i> Mr Lorem 
                                        <i class="far fa-calendar-alt ele ion"></i> 20-11-2019
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <div class="ps-badge"><span>Sale</span></div>
                                        <a href="single_property.html"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/feture_img/image_4.jpg" alt=""> </a>
                                        <div class="dolor">$50,000</div>
                                        <h5 class="card-title text-center" style="padding-top: 15px;">Relaxing Apartment</h5>
                                        <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> 123 Kathal St. Tampa City</p>
                                        
                                        <div class="row">
                                            <div class="col">Area</div>
                                            <div class="col">Beds</div>
                                            <div class="col">Baths</div>
                                            <div class="col">Garage</div>
                                            <div class="col">3600</div>
                                            <div class="col">4</div>
                                            <div class="col">3</div>
                                            <div class="col">1</div>
                                        </div>
                                        <i class="fas fa-user"></i> Mr Lorem 
                                        <i class="far fa-calendar-alt ele ion"></i> 20-11-2019
                                    </div>
                                </div>
                            </div>     --}}
                        </div>
                    </div>
                @endforeach
                {{-- <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">  
                                    <div class="ps-badge"><span>Sale</span></div>
                                    <a href="single_property.html"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/feture_img/image_4.jpg" alt=""> </a>
                                    <div class="dolor">$50,000</div>
                                    <h5 class="card-title text-center" style="padding-top: 15px;">Relaxing Apartment</h5>
                                    <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> 123 Kathal St. Tampa City</p>
                                    
                                    <div class="row">
                                        <div class="col">Area</div>
                                        <div class="col">Beds</div>
                                        <div class="col">Baths</div>
                                        <div class="col">Garage</div>
                                        <div class="col">3600</div>
                                        <div class="col">4</div>
                                        <div class="col">3</div>
                                        <div class="col">1</div>
                                    </div>
                                    <i class="fas fa-user"></i> Mr Lorem 
                                    <i class="far fa-calendar-alt ele ion" ></i> 20-11-2019
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="ps-badge"><span>Sale</span></div>
                                    <a href="single_property.html"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/feture_img/image_4.jpg" alt=""> </a>
                                    <div class="dolor">$50,000</div>
                                    <h5 class="card-title text-center" style="padding-top: 15px;">Relaxing Apartment</h5>
                                    <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> 123 Kathal St. Tampa City</p>
                                    
                                    <div class="row">
                                        <div class="col">Area</div>
                                        <div class="col">Beds</div>
                                        <div class="col">Baths</div>
                                        <div class="col">Garage</div>
                                        <div class="col">3600</div>
                                        <div class="col">4</div>
                                        <div class="col">3</div>
                                        <div class="col">1</div>
                                    </div>
                                    <i class="fas fa-user"></i> Mr Lorem 
                                    <i class="far fa-calendar-alt ele ion"></i> 20-11-2019
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="ps-badge"><span>Sale</span></div>
                                    <a href="single_properties"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/feture_img/image_4.jpg" alt=""> </a>
                                    <div class="dolor">$50,000</div>
                                    <h5 class="card-title text-center" style="padding-top: 15px;">Relaxing Apartment</h5>
                                    <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> 123 Kathal St. Tampa City</p>
                                    
                                    <div class="row">
                                        <div class="col">Area</div>
                                        <div class="col">Beds</div>
                                        <div class="col">Baths</div>
                                        <div class="col">Garage</div>
                                        <div class="col">3600</div>
                                        <div class="col">4</div>
                                        <div class="col">3</div>
                                        <div class="col">1</div>
                                    </div>
                                    <i class="fas fa-user"></i> Mr Lorem 
                                    <i class="far fa-calendar-alt ele ion"></i> 20-11-2019
                                </div>
                            </div>
                        </div>    
                    </div>
                </div> --}}
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
