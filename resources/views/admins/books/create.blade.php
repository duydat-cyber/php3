@extends('layouts.admin')

@section('content')
    <h1>Them Moi</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Url Thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="publication" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" class="form-control" id="">
                @foreach ($categories as $cate)
                    <option value="{{ $cate->id }}">
                        {{ $cate->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Add New</button>
            <a href="{{ route('index') }}" class="btn btn-success">List</a>
        </div>
    </form>
@endsection
