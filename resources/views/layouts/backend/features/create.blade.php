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
            <form  action="{{route('feature.store')}}" method="post" >
                @csrf
                <div class="card-body">
                   
                  <div class="form-row">
                     <div class="col">
                        <select name="featurproperties_id" class="form-control">
                           <option value="" hidden>Select one</option>
                           @foreach($featurproperties as $f_id)
                             <option value="{{$f_id->id}}">{{$f_id->id}}</option>
                           @endforeach
                       </select>
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_1" name="featuer_1">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_2" name="featuer_2">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_3" name="featuer_3">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_4" name="featuer_4">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_5" name="featuer_5">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_6" name="featuer_6">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_7" name="featuer_7">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_8" name="featuer_8">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_9" name="featuer_9">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                        <input type="submit" name="submit" class="btn btn-primary" value="SAVE">
                     </div>
                   </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection