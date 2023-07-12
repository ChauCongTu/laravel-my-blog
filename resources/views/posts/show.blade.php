@extends('layouts.master')
@section('title')
    {{ $post->name }}
@endsection
@section('main-sidebar')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="btn-muted">ChauCongTu.Site</a></li>
            @if (!empty($post->category->parent))
                <li class="breadcrumb-item text-muted" aria-current="page"><a
                        href="{{ route('category.show', ['slug' => Str::slug($post->category->parent->name), 'id' => $post->category->parent->id]) }}"
                        class="btn-muted"> {{ $post->category->parent->name }}</a></li>
            @endif
            <li class="breadcrumb-item text-muted" aria-current="page"><a
                    href="{{ route('category.show', ['slug' => Str::slug($post->category->name), 'id' => $post->category->id]) }}"
                    class="btn-muted"> {{ $post->category->name }}</a></li>
            <li class="breadcrumb-item text-muted" aria-current="page">{{ $post->name }}</li>
        </ol>
    </nav>
@endsection
@section('content')
    <h1 class="title fw-bold">{{ $post->name }}</h1>
    <div class="meta-list text-muted pb-3">
        <span class="author"><i class="fa-solid fa-user"></i> {{ $post->user->display_name }}</span> <span>&#8226;</span>
        <span class="time">{{ date('d/m/Y \a\t h:i a', strtotime($post->created_at)) }}</span> <span>&#8226;</span>
        <span class="comment"><i class="fa-solid fa-comments"></i>
            ({{ !empty($post->comments) ? $post->comments->count() : '0' }})</span>
    </div>
    <div class="thumb text-center py-2">
        <img src="{{ $post->thumb }}" alt="{{ $post->name }}" class="w-75 rounded">
    </div>
    <div class="content mt-4">
        {!! $post->content !!}
    </div>
    <hr />
    <div class="share">
        Share this:
        <a href="" class="btn btn-link"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="" class="btn btn-link"><i class="fa-brands fa-twitter"></i></a>
        <a href="" class="btn btn-link"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="" class="btn btn-link"><i class="fa-brands fa-pinterest"></i></a>
        <a href="" class="btn btn-link"><i class="fa-brands fa-telegram"></i></a>
        <a href="" class="btn btn-link"><i class="fa-solid fa-envelope"></i></a>
    </div>
    <hr />
    <div class="comment mb-3">
        <div class="title border-bottom border-5 border-danger h3 fw-bold py-3 mb-3">Bình luận</div>
        @foreach ($post->comments as $comment)
            <div class="comment-item border border-secondary p-3 rounded mb-3">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-2">
                        <img src="{{ asset('images/icon/user.png') }}" alt="{{ $comment->name }}"
                            class="rounded-circle d-flex justify-content-center">
                    </div>
                    <div class="col-sm-10">
                        <div class="name h5 fw-bold">{{ $comment->name }} <span
                                class="text-muted ms-3">#{{ $comment->id }}</span></div>
                        <div class="date text-muted border-bottom border-secondary pb-2">
                            {{ date('d/m/Y \a\t h:i a', strtotime($comment->created_at)) }}</div>
                        <div class="content mt-2">
                            {{ $comment->content }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="leave-a-comment border border-secondary rounded p-3" id="comment">
            <form action="{{ route('post.comment') }}#comment" method="post">
                @csrf
                <div class="mb-3">
                    <label for="comment" class="h5">Nội dung:</label>
                    <textarea name="content" class="form-control" rows="5">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="name" class="h5">Tên của bạn:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="email" class="h5">Địa chỉ Email:</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="text-muted mb-3">
                    Địa chỉ email của bạn sẽ không được công khai!
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success px-4">Gửi <i
                            class="fa-solid fa-paper-plane ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
