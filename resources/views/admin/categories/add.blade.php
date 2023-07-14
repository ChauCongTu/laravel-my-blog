@extends('layouts.admin')
@section('title')
    Thêm bài viết
@endsection
@section('content')
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post" class="col-md-8">
                @csrf
                <div class="mb-3">
                    <label for="name" class="h5">Tên danh mục: </label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="parent_id" class="h5">Danh mục cha: </label>
                    <select name="parent_id" class="form-control">
                        <option value="0">Không</option>
                        @foreach ($rootCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-4">Thêm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
