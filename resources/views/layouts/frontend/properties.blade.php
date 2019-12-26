@include('layouts.frontend.include.header')

    <!-- nevber end -->
    <div class="back2">
        <div class="container text-center">
            <h1 class="properties">PROPERTIES</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores in expedita aut nesciunt quas consectetur, quasi id voluptatibus nisi sint suscipit temporibus distinctio beatae iusto reiciendis! Laborum est nulla debitis.</p>  
        </div>
    </div>

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <section >
                    <div class="card">
                        <div class="card-body text-center">
                            <h2>PROPERTIES</h2>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
        <br>
        <!-- properties -->
        <div class="container card bg-light">
            <br>
            
                <div class="row">
                    @foreach ($featurproperty as $item)
                    <div class="col-sm-4 col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                            <div class="ps-badge"><span>{{$item->sale_both}}</span></div>
                            <a href="{{route('single_properties',$item->id)}}"><img class="img-fluid" src="{{asset('/')}}assets/frontend/img/futerproperties/{{$item->image}}" alt=""> </a>
                                <div class="dolor">${{$item->price}}</div>
                                <h5 class="card-title text-center" style="padding-top: 15px;"> {{$item->title}}</h5>
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
                                <i class="far fa-calendar-alt ele ion" ></i> {{$item->date}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                      
                </div> 
        </div>
        <!--end container  -->
        <!-- end properties -->
        <br>
        {!! $featurproperty->links() !!}
    </div>
    <!-- end container -->
    <br><br><br>
    <!-- footer -->
@include('layouts.frontend.include.footer')
    