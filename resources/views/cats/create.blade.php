@extends('layouts.app')

@section('content')
<h3>Add a New Cat ᓚᘏᗢ</h3>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form action="{{ route('cats.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label>Name (optional)</label>
    <input type="text" name="name" class="form-control">
  </div>

  <div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" required></textarea>
  </div>

  <div class="mb-3">
    <label>Rating (1–5)</label>
    <input type="number" name="rating" class="form-control" min="1" max="5" required>
  </div>

  <div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
