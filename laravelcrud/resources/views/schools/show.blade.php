@extends('schools.layout');
@section('content');
<div class="container">
    @if($school)
    <div class="container">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$school->name}}</h5>
    <p class="card-text">{{$school->address}}</p>
    <p class="card-text">{{$school->phone}}</p>
  </div>
</div>
    </div>
    @endif
</div>
@endsection;