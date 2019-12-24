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
            <form method="post" action="{{ route('fproperty.update', $featurproperty->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                    <input type="text" name="title" class="form-control-file border" value="{{$featurproperty->title}}" />
                     </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control-file border" value="{{$featurproperty->location}}" />
                     </div>
                     <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" name="area" class="form-control-file border" value="{{$featurproperty->area}}" />
                     </div>
                    <div class="form-group">
                        <label for="beds">Beds</label>
                        <input type="text" name="beds" class="form-control-file border" value="{{$featurproperty->beds}}" />
                     </div>
                     <div class="form-group">
                        <label for="baths">Baths</label>
                        <input type="text" name="baths" class="form-control-file border" value="{{$featurproperty->baths}}" />
                     </div>
                     <div class="form-group">
                        <label for="garage">Garage</label>
                        <input type="text" name="garage" class="form-control-file border" value="{{$featurproperty->garage}}" />
                     </div>
                     <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control-file border" value="{{$featurproperty->price}}" />
                     </div>
                     <div class="form-group">
                        <label for="sale_both">Sale Both</label>
                        <input type="text" name="sale_both" class="form-control-file border" value="{{$featurproperty->sale_both}}" />
                     </div>
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control-file border" value="{{$featurproperty->name}}" />
                     </div>
                     <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" class="form-control-file border" value="{{$featurproperty->date}}" />
                     </div>
                    <div class="form-group">
                        <label for="file">Add Properties</label>
                        <input type="file" name="image" class="form-control-file border" />
                        <img src="{{ URL::to('/') }}//assets/frontend/img/futerproperties/{{ $featurproperty->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $featurproperty->image }}" />
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection