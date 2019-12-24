@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Our Agents</h1>
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
                    <p><a class="btn btn-primary" href="{{route('agents.create')}}">Add Agents</a></p>
                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Email</th>
                                    <th> Number</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Pinterest</th>
                                    <th>Twitter</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($agents as $agent)
                                  <tr>
                                    <td><img src="{{ URL::to('/') }}/assets/frontend/img/agents/{{ $agent->image }}" class="img-thumbnail" width="75" /></td>
                                    <td>{{$agent->name}}</td>
                                    <td>{{$agent->description}}</td>
                                    <td>{{$agent->location}}</td>
                                    <td>{{$agent->email}}</td>
                                    <td>{{$agent->number}}</td>
                                    <td>{{$agent->facebook}}</td>
                                    <td>{{$agent->instagram}}</td>
                                    <td>{{$agent->pinterest}}</td>
                                    <td>{{$agent->twitter}}</td>
                                   <td>
                                   <form action="{{ route('agents.destroy',$agent->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('agents.edit', $agent->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                   </td>
                                  </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            {!! $agents->links() !!}


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

