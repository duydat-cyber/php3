@extends('layouts.admin')


@section('content')
    <h1>Cap Nhat Sach</h1>
    <form action="{{ route('edit', ['id' => $book->id]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="" value="{{ $book->id }}">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{ $book->title }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Url Thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="" value="{{ $book->thumbnail }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="" value="{{ $book->author }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="" value="{{ $book->publisher }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">DateTime</label>
            <input type="date" name="publication" class="form-control" id="" value="{{ $book->publication }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">price</label>
            <input type="number" step="0.1" name="price" class="form-control" id=""
                value="{{ $book->price }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="" value="{{ $book->quantity }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" class="form-control" id="">
                @foreach ($categories as $cate)
                    <option value="{{ $cate->id }}" @if ($cate->id === $book->category_id) selected @endif>
                        {{ $cate->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('index') }}" class="btn btn-success">List</a>
        </div>
    </form>
@endsection
