@extends('layouts.main')
@section('content')
  <div class="container">
    <h2>Add Category</h2>
    <div class="row mt-5">
      <div class="col-12">
        <form action="{{ route('categories.store') }}" method="POST">
          @csrf
          <div class="form-group w-50">
            <input type="text" class="form-control" name="name" placeholder="Category name" value="{{ old('name') }}">
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Create">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection