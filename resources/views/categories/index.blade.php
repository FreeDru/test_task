@extends('layouts.main')
@section('content')

<div class="col-2">
  <a href="{{ route('categories.create') }}" type="button" class="btn btn-block btn-success">Add Category</a>
</div>
                @foreach ($categories as $category)                        
                <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                  <li
                    class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                    <p class="lead fw-normal mb-0 col-4">{{ $loop->index + 1}}</p>
                    <p class="lead fw-normal mb-0 col-4">{{ $category->name }}</p>
                    <ul class="text-right col-4">
                      <div class="btn-group">
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning ml-3">Edit</a>
                          <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger ml-3" value="Delete">
                          </form>
                      </div>
                    </ul>
                  </li>
                </ul>
                @endforeach 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection