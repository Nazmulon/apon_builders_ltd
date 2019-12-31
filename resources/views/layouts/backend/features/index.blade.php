@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Features</h1>
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
                    <p><a class="btn btn-primary" href="{{route('feature.create')}}">Add Features</a></p>
                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Featureproperties id</th>
                                    <th>Feature 1</th>
                                    <th>Feature 2</th>
                                    <th>Feature 3</th>
                                    <th>Feature 4</th>
                                    <th>Feature 5</th>
                                    <th>Feature 6</th>
                                    <th>Feature 7</th>
                                    <th>Feature 8</th>
                                    <th>Feature 9</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($features as $feature)
                                  <tr>
                                  <td>{{$feature->featurproperties_id}}</td>
                                  <td>{{$feature->featuer_1}}</td>
                                  <td>{{$feature->featuer_2}}</td>
                                  <td>{{$feature->featuer_3}}</td>
                                  <td>{{$feature->featuer_4}}</td>
                                  <td>{{$feature->featuer_5}}</td>
                                  <td>{{$feature->featuer_6}}</td>
                                  <td>{{$feature->featuer_7}}</td>
                                  <td>{{$feature->featuer_8}}</td>
                                  <td>{{$feature->featuer_9}}</td>                                                                                                       
                                    <td>
                                   <form action="{{ route('feature.destroy',$feature->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('feature.edit',$feature->id) }}">Edit</a>
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

