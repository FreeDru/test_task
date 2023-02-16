@extends('layouts.main')
@section('content')
  <div class="container">
    <h2>Edit Lot</h2>
    <div class="row mt-5">
      <div class="col-12">
        <form action="{{ route('lots.update', $lot->id) }}" method="POST">
          @csrf
          @method('PATCH')
          <div class="form-group w-50">
            <input type="text" class="form-control" name="name" placeholder="Lot name" value="{{ $lot->name }}">
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group w-50">            
            <textarea class="form-control" rows="5" name="description" value="{{ $lot->description }}">{{ $lot->description }}</textarea>
            @error('description')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group w-50">
            <label>select category</label>
            <select name="category_id" class="form-control">
              @foreach ($categories as $category)                  
              <option value="{{ $category->id }}" {{ $category->id == $lot->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
              @endforeach
            </select>
            @error('category_id')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Update">
            <a href="{{ route('lots.show', $lot->id) }}" class="btn btn-primary ml-3">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection