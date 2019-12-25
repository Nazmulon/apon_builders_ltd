@extends('layouts.backend.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
   <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <form method="post" action="{{ route('footers.update', $footers->id) }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control-file border" value="{{$footers->description}}" />
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control-file border" value="{{$footers->location}}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control-file border" value="{{$footers->email}}" />
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" name="number" class="form-control-file border" value="{{$footers->number}}" />
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">
                     </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection