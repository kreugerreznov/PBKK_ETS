@extends('layouts.app')

@section('content')
<h3>Edit Cat Info ᓚᘏᗢ</h3>

<form action="{{ route('cats.update', $cat) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label>Name (optional)</label>
    <input type="text" name="name" class="form-control" value="{{ $cat->name }}">
  </div>

  <div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ $cat->description }}</textarea>
  </div>

  <div class="mb-3">
    <label>Rating (1–5)</label>
    <input type="number" name="rating" class="form-control" value="{{ $cat->rating }}" min="1" max="5">
  </div>

  <div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if($cat->image)
      <img src="{{ asset('storage/'.$cat->image) }}" class="mt-2" width="150">
    @endif
  </div>

  <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
