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
            <form method="post" action="{{ route('slider.update', $sliders->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control-file border" value="{{$sliders->title}}" />
                     </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control-file border" value="{{$sliders->description}}" />
                     </div>
                    <div class="form-group">
                        <label for="file">Add Slider</label>
                        <input type="file" name="image" class="form-control-file border" />
                        <img src="{{ URL::to('/') }}//assets/frontend/img/slider/{{ $sliders->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $sliders->image }}" />
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection