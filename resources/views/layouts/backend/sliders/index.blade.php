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
                    <p><a class="btn btn-primary" href="{{route('slider.create')}}">Add Logo</a></p>
                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($sliders as $slider)
                                  <tr>
                                   <td><img src="{{ URL::to('/') }}/assets/frontend/img/slider/{{ $slider->image }}" class="img-thumbnail" width="75" /></td>
                                   <td>{{ $slider->title }}</td>
                                   <td>{{ $slider->description }}</td>
                                   <td>
                                   <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('slider.edit', $slider->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                   </td>
                                  </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            {!! $sliders->links() !!}


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

