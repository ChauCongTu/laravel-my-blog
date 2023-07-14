@extends('layouts.admin')
@section('title')
    Chỉnh sửa bài viết
@endsection
@section('content')
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <form action="{{ route('post.update', ['post' => $post]) }}" method="post" class="col-md-8" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="h5">Tên bài viết: </label>
                    <input type="text" name="name" class="form-control" value="{{ $post->name }}">
                    @error('name')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="h5">Nội dung: </label>
                    <textarea name="content" id="content" class="form-control">
                        {!! $post->content !!}
                    </textarea>
                    <script>
                        CKEDITOR.replace('content');
                    </script>
                    @error('content')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="h5">Hình ảnh: </label>
                    <input type="file" name="thumb" class="form-control" accept="image/*">
                    @error('thumb')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="h5">Danh mục: </label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $post->category_id == $category->id ? 'selected' : false }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-4">Cập nhật</button>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
@endsection
