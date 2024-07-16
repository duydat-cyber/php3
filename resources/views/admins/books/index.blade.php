@extends('layouts.admin')


@section('content')
    <h1>Danh Sach</h1>
    @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Publication</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category Name</th>
                <th>
                    <a href="{{ asset('create') }}" class="btn btn-success">Create New</a>
                </th>
            </tr>


        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>
                        <img src="{{ $book->thumbnail }}" width="60" alt="">
                    </td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->publication }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>{{ $book->name }}</td>
                    <td>
                        <a href="{{ route('edit', ['id' => $book->id]) }}" class="btn btn-success">Edit</a>

                        <form action="{{ route('destroy', ['id' => $book->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('xban co muon xoa khong?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
