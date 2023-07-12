@extends('layouts.master')
@section('title')
    Tổng hợp {{ $category->name }}
@endsection
@section('main-sidebar')
    <section class="main-sidebar">
        <div class="text-center py-5">
            <p class="fw-bold h3">{{ $category->name }}</p>
            <p class="text-muted">
                <a href="{{ route('home') }}" class="text-muted">ChauCongTu.Site</a> \
                {{ !empty($category->parent) ? $category->parent->name . ' \\' : false }}
                {{ $category->name }}
            </p>
        </div>
    </section>
@endsection
@section('content')
    <div class="row">
        @forelse ($posts as $post)
            {{-- Foreach post --}}
            <div class="col-md-6 mb-3">
                <div class="border border-secondary rounded p-3">
                    <div class="c-img overflow-hidden rounded">
                        <img src="{{ asset('images/post/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-750x400 (1).webp') }}"
                            alt="" class="scale-zoom w-100">
                    </div>
                    <div class="content p-3 border-bottom border-secondary">
                        <div class="n-auth">
                            <span class="post-author me-2"><i
                                    class="fa fa-user me-2"></i>{{ $post->user->display_name }}</span>
                            &#8226;
                            <span class="date-post ms-2 me-2">{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                            &#8226; <span class="date-post ms-2">{{ $post->category->name }}</span>
                        </div>
                        <div class="n-name">
                            <a href="">
                                {{ $post->name }}
                            </a>
                        </div>
                        <div class="n-content">
                            {{ $post->content }}
                        </div>
                    </div>
                    <div class="pt-2 action text-end">
                        <a href="">Xem bài viết<i class="fa-solid fa-angles-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center h4">
                <p class="text-muted">Danh mục này chưa có bài viết nào! Quay lại sau nhé</p>
            </div>
        @endforelse
        {{-- <div class="text-center">
            {{ $posts->links() }}
        </div> --}}
    </div>
@endsection
