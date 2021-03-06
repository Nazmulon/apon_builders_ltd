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
            <form method="post" action="{{ route('agents.update', $agents->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" name="name" class="form-control-file border" value="{{ $agents->name }}" />
                  </div>
                  <div class="form-group">
                     <label for="description">Description</label>
                     <input type="text" name="description" class="form-control-file border" value="{{ $agents->description }}" />
                  </div>
                 <div class="form-group">
                     <label for="location">Location</label>
                     <input type="text" name="location" class="form-control-file border" value="{{ $agents->location }}" />
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" name="email" class="form-control-file border" value="{{ $agents->email }}" />
                  </div>
                 <div class="form-group">
                     <label for="number">Number</label>
                     <input type="text" name="number" class="form-control-file border" value="{{ $agents->number }}" />
                  </div>
                  <div class="form-group">
                     <label for="facebook">Facebook</label>
                     <input type="text" name="facebook" class="form-control-file border" value="{{ $agents->facebook }}" />
                  </div>
                  <div class="form-group">
                     <label for="instagram">Instagram</label>
                     <input type="text" name="instagram" class="form-control-file border" value="{{ $agents->instagram }}" />
                  </div>
                  <div class="form-group">
                     <label for="pinterest">Pinterest</label>
                     <input type="text" name="pinterest" class="form-control-file border" value="{{ $agents->pinterest }}" />
                  </div>
                  <div class="form-group">
                     <label for="twitter">Twitter</label>
                     <input type="text" name="twitter" class="form-control-file border" value="{{ $agents->twitter }}" />
                  </div>
            
                    <div class="form-group">
                        <label for="file">Add Image</label>
                        <input type="file" name="image" class="form-control-file border" />
                        <img src="{{ URL::to('/') }}//assets/frontend/img/agents/{{ $agents->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $agents->image }}" />
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection