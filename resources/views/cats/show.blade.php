@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
  @if($cat->image)
  <img src="{{ asset('storage/'.$cat->image) }}" class="card-img-top" style="height: 400px; object-fit: cover;">
  @endif
  <div class="card-body">
    <h4>{{ $cat->name ?? 'Unnamed Cat' }}</h4>
    <p>{{ $cat->description }}</p>
    <p>⭐ {{ $cat->rating }}/5</p>

    <a href="{{ route('cats.edit', $cat) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('cats.destroy', $cat) }}" method="POST" class="d-inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
</div>
@endsection
