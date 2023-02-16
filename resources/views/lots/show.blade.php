@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Category: {{ $lot->category->name }}</h3>
      <h4>Lot: {{ $lot->name }} </h4>
      <p>{{ $lot->description }}</p>
    </div>
    <div class="row col-4">
      <a href="{{ route('lots.index') }}" class="btn btn-primary ml-3">Back</a>
    </div>
    <div class="row col-6">
      <a href="{{ route('lots.edit', $lot->id) }}" class="btn btn-warning ml-3">Edit</a>
      <div class="col-2">
        <form action="{{ route('lots.destroy', $lot->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection