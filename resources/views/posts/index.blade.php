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

    @foreach ($posts as $post){
    <tr>
        <td>{{ $loop ->iteration }}</td>
        <td>{{ $loop->title }}</td>
        <td>
            <a href="{{ route('posts.edit') }}" class="btn btn-warning mb-3">Edit</a>
            <form action="{{ route('posts.destroy') }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Yakin mau hapus postingan ini?')"
            >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
}
@endforeach

</table>

{{ $posts->link() }}
@endsection

