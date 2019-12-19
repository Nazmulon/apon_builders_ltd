@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add Email & Number</h1>
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
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($emailNumber as $ename)
                                <tr>
                                    <td>{{$ename->a_email}}</td>
                                    <td>{{$ename->a_number}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('email_number.edit',$ename->id)}}">edit</a>
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

