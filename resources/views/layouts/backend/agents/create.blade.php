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
            <form  action="{{route('agents.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control-file border" />
                     </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control-file border" />
                     </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" name="number" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="pinterest">Pinterest</label>
                        <input type="text" name="pinterest" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" name="twitter" class="form-control-file border" />
                     </div>
                    <div class="form-group">
                        <label for="file">Add Image</label>
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