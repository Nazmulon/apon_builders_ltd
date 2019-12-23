@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">All Category</h1>
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
                    <p><a class="btn btn-primary" href="{{route('category.create')}}">Add Category</a></p>
                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Category_ID</th>
                                    <th>Category_Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($categories as $category)
                                  <tr>
                                   <td>{{ $category->category_id }}</td>
                                   <td>{{ $category->category_name }}</td>
                                   <td>
                                   <form action="{{ route('category.destroy',$category->category_id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('category.edit', $category->category_id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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

