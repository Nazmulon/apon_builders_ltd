@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Social Link</h1>
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

                            <!-- table start -->
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Pinterest</th>
                                        <th>Twitter</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($social as $icon)
                                    <tr>
                                        <td>{{$icon->facebook}}</td>
                                        <td>{{$icon->instagram}}</td>
                                        <td>{{$icon->pinterest}}</td>
                                        <td>{{$icon->twitter}}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin_social_link.edit',$icon->id)}}">edit</a>
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

