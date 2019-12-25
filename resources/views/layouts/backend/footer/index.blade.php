@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Footer</h1>
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
                    <p><a class="btn btn-primary" href="{{route('footers.create')}}">Add Footer</a></p>
                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Dscription</th>
                                    <th>Location</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($footers as $footer)
                                  <tr>
                                   <td>{{ $footer->description }}</td>
                                   <td>{{ $footer->location }}</td>
                                   <td>{{ $footer->email }}</td>
                                   <td>{{ $footer->number }}</td>
                                   <td>
                                   <form action="{{ route('footers.destroy',$footer->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('footers.edit', $footer->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                    </form>
                                   </td>
                                  </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            
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

