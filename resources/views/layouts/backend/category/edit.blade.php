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
            <form method="post" action="{{ route('category.update', $categories->category_id) }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Category</label>
                        <input type="text" name="category_name" class="form-control-file border" value="{{$categories->category_name}}" />
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">
                     </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection