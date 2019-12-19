@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <form  action="{{route('email_number.update', $emailNumber->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="a_email" class="form-control"  placeholder="Enter email" value="{{ $emailNumber->a_email }}">
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="number" name="a_number" class="form-control"  placeholder="Number" value="{{ $emailNumber->a_number }}">
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


