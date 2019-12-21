@extends('layouts.backend.app')

@section('content')
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <form  action="{{route('logo.update', $logo->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image">Logo</label>
                            <input type="file" id="image" name="image" class="form-control-file border" />
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection