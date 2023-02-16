@extends('layouts.main')
@section('content')
  <div class="container">
    <h2>Edit Category</h2>
    <div class="row mt-5">
      <div class="col-12">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
          @csrf
          @method('PATCH')
          <div class="form-group w-50">
            <input type="text" class="form-control" name="name" placeholder="Category name" value="{{ $category->name }}">
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Update">
            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary ml-3">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection