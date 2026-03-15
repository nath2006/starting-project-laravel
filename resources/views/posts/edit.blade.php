@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<h3 class="h3 mb-3">Edit Postingan</h3>
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text"
               name="title"
               value="{{ old('title', $post->title) }}"
               class="form-control @error('title') is-invalid @enderror">
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content"
                  rows="5"
                  class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
        @error('content')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>
      </div>
    </form>
    </div>
</div>

@endsection
