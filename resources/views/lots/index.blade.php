@extends('layouts.main')
@section('content')
<div class="col-2">
  <a href="{{ route('lots.create') }}" type="button" class="btn btn-block btn-success">Add Lot</a>
</div>
                @foreach ($lots as $lot)                        
                <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                  <li
                    class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                    <p class="lead fw-normal mb-0 col-4">{{ $loop->index + 1}}</p>
                    <p class="lead fw-normal mb-0 col-4">{{ $lot->name }}</p>
                    <ul class="text-right col-4">
                      <div class="btn-group">
                        <a href="{{ route('lots.show', $lot->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('lots.edit', $lot->id) }}" class="btn btn-warning ml-3">Edit</a>
                          <form action="{{ route('lots.destroy', $lot->id) }}" method="POST">
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
            <div class="pagination">
                {{ $lots->withQueryString()->links() }}
            </div> 
          </div>
        </div>
      </div>
    </section>
@endsection