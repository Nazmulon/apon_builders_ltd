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
            <form method="post" action="{{ route('feature.update', $features->id) }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-row">
                     <div class="col">
                     <input type="text" class="form-control" placeholder="Feature_1" name="featuer_1" value="{{$features->featuer_1}}">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_2" name="featuer_2" value="{{$features->featuer_2}}">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_3" name="featuer_3" value="{{$features->featuer_3}}">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_4" name="featuer_4" value="{{$features->featuer_4}}">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_5" name="featuer_5" value="{{$features->featuer_5}}">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_6" name="featuer_6" value="{{$features->featuer_6}}">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_7" name="featuer_7" value="{{$features->featuer_7}}">
                     </div>
                   </div>
                   <br>
                   <div class="form-row">
                     <div class="col">
                       <input type="text" class="form-control"  placeholder="Feature_8" name="featuer_8" value="{{$features->featuer_8}}">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Feature_9" name="featuer_9" value="{{$features->featuer_9}}">
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