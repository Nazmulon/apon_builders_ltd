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
            <form  action="{{route('featuredproperty.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <select name="category">
                            <option value="">Select one</option>
                            <option value="">Select one</option>
                        </select>
                        <input type="text" name="location" class="form-control-file border" />
                     </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" name="area" class="form-control-file border" />
                     </div>
                    <div class="form-group">
                        <label for="beds">Beds</label>
                        <input type="text" name="beds" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="baths">Baths</label>
                        <input type="text" name="baths" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="garage">Garage</label>
                        <input type="text" name="garage" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="sale_both">Sale Both</label>
                        <input type="text" name="sale_both" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control-file border" />
                     </div>
                     <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" class="form-control-file border" />
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