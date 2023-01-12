@extends('schools.layout');
@section('content');
<div class="container">

@if($messge = Session::get('success'))
<div class="alert alert-success text-center">{{ $messge }}</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  @if($schools)
  <tbody>
      @foreach($schools as $school)
    <tr>
      <td class="align-middle">{{ $school->name }}</td>
      <td class="align-middle">{{ $school->address }}</td>
      <td class="align-middle">{{ $school->phone }}</td>
      <td class="align-middle">
        <form action="{{ route('schools.destroy', $school->id) }}" method="post">
        <a href="{{ route('schools.show', $school->id)}} " class="btn btn-info">Show</a>
        <a href="{{ route('schools.edit', $school->id)}}" class="btn btn-primary">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
  @endif
</table>
<div class="d-flex">
    <div class="mx-auto">
        {!! $schools->links() !!}
    </div>
</div>
</div>
@endsection;