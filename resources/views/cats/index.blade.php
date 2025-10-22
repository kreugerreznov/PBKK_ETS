@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h3>All Street Cats ᓚᘏᗢ</h3>
  <a href="{{ route('cats.create') }}" 
     class="btn" 
     style="background-color: #b5835a; color: white; border-radius: 6px; padding: 6px 14px;">
     Add Cat
  </a>
</div>

<div class="row">
  @foreach($cats as $cat)
  <div class="col-md-4 mb-4">
    <div class="card shadow-sm">
      @if($cat->image)
      <img src="{{ asset('storage/'.$cat->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
      @endif
      <div class="card-body">
        <h5>{{ $cat->name ?? 'Unnamed Cat' }}</h5>
        <p>{{ Str::limit($cat->description, 80) }}</p>
        <p>⭐ {{ $cat->rating }}/5</p>
        <a href="{{ route('cats.show', $cat) }}" class="btn btn-sm btn-outline-dark">View</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

{{ $cats->links() }}
@endsection
