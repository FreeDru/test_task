@extends('layouts.main')
@section('content')
  <div class="container">
    <h2>Add Lot</h2>
    <div class="row mt-5">
      <div class="col-12">
        <form action="{{ route('lots.store') }}" method="POST">
          @csrf
          <div class="form-group w-50">
            <input type="text" class="form-control" name="name" placeholder="Lot name" value="{{ old('name') }}">
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group w-50">
            <textarea class="form-control" rows="5" name="description" placeholder="Lot description" value="{{ old('description') }}"></textarea>
            @error('description')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group w-50">
            <label>select category</label>
            <select name="category_id" class="form-control">
              @foreach ($categories as $category)                   
                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
              @endforeach
            </select>
            @error('category_id')
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