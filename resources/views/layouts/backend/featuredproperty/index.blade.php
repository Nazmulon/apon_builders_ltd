@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Sliders</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!--/.col (left) -->
                    <!-- right column -->
                    
                    <div class="col-md-12">
                    <p><a class="btn btn-primary" href="{{route('featuredproperty.create')}}">Add Property</a></p>
                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Area</th>
                                    <th>Beds</th>
                                    <th>Baths</th>
                                    <th>Garage</th>
                                    <th>Price</th>
                                    <th>Sale_Both</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($featurproperty as $property)
                                  <tr>
                                  <td>{{$property->title}}</td>
                                  <td>{{$property->location}}</td>
                                  <td>{{$property->area}}</td>
                                  <td>{{$property->beds}}</td>
                                  <td>{{$property->baths}}</td>
                                  <td>{{$property->garage}}</td>
                                  <td>{{$property->price}}</td>
                                  <td>{{$property->sale_both}}</td>
                                  <td>{{$property->name}}</td>
                                  <td>{{$property->date}}</td>
                                                                        
                                   <td><img src="{{ URL::to('/') }}/assets/frontend/img/properties/{{ $property->image }}" class="img-thumbnail" width="75" /></td>
                                   
                                   <td>
                                   <form action="{{ route('featuredproperty.destroy',$property->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('slider.edit', $property->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                   </td>
                                  </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            {!! $featurproperty->links() !!}


                        <!-- /.card -->
                    </div>
                </div>
                <!--/.col (right) -->

            </div>
            <!-- /.row (main row) -->
    </div>
    </section>
    <!-- /.content -->
    </div>
@endsection

