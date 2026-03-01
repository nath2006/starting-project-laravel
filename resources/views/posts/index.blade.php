@extends('layout.app')

@section('title', 'Postingan')

@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Tambah</a>


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Aksi</th>
    </tr>
</table>



@endsection

