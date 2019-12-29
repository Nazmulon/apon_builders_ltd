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
            <form  action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <select name="featurproperties_id" class="form-control-file border">
                            <option value="" hidden>Select one</option>
                            @foreach($featurproperty as $category)
                              <option value="{{$category->id}}">{{$category->category_id}}</option>
                            @endforeach
                        </select>
                     </div>
                    <div class="form-group">
                        <label for="file">Add Image:</label>
                        <input type="file" name="image[]" id="file" accept="image/*" multiple />
                       
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="SAVE">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection