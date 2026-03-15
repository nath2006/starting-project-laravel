@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
@csrf
    <div class="mb-3">
        <label for="">Title</label>
        <input type="text" name="title"
            class="form-control @error('title') is-invalid @enderror">
        @error('title')
            <div class="ivalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-success">Simpan Data</button>
    </form
@endsection
