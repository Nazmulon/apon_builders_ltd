@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <form  action="{{route('logo.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="file">Logo</label>
                            <input type="file" name="image" class="form-control-file border" />
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary" value="SAVE">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection