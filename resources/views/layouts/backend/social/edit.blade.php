@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <form  action="{{route('admin_social_link.update', $id->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" class="form-control"  value="{{ $id->facebook }}">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" name="instagram" class="form-control"  value="{{ $id->instagram }}">
                        </div>
                        <div class="form-group">
                            <label for="pinterest">Pinterest</label>
                            <input type="text" name="pinterest" class="form-control" value="{{ $id->pinterest }}">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="{{ $id->twitter }}">
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


