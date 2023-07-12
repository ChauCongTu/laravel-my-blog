@extends('layouts.master')
@section('title')
    Blog chia sẻ thủ thuật, công nghệ
@endsection
@section('main-sidebar')
    <section class="new-posts mt-3">
        <div class="posts slick-pane text-center">
            @foreach ($lastest as $post)
                <div class="new-item text-center">
                    <div class="bg-image rounded">
                        <img src="{{ $post->thumb }}" class="scale-zoom w-100">
                    </div>
                    <div class="content d-flex align-items-center justify-content-center">
                        <div>
                            <div class="category mb-2"><span
                                    class="bg-grd py-2 px-3 rounded-5">{{ $post->category->name }}</span>
                            </div>
                            <div class="name mb-3"><a href="{{ route('home') }}">{{ $post->name }}</a></div>
                            <div class="d-flex justify-content-center">
                                <div class="post-author me-2">{{ $post->user->display_name }}</div> &#8226; <div
                                    class="date-post ms-2">
                                    {{ date('d/m/Y', strtotime($post->created_at)) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('content')
    <div class="p-2">
        {{-- Foreach Category --}}
        @foreach ($categories as $category)
            <div class="title h3 text-danger mb-3 mt-5"><span class="title-span fw-bold">{{ $category->name }}</span>
            </div>
            <div class="list border border-lg border-secondary rounded">
                <div class="row p-3">
                    <div class="col-md-6">
                        @if ($category->child->count() > 0)
                            @foreach ($category->child as $child)
                                @foreach ($child->posts as $post)
                                    @if ($loop->first)
                                        {{-- First Item --}}
                                        <x-item-card-categories first=1 :thumb="$post->thumb" :author="$post->user->display_name"
                                            :date="date('d/m/Y', strtotime($post->created_at))" link="/" :name="$post->name" :content="$post->content" />
                                    @endif
                                @endforeach
                            @endforeach
                        @else
                            @foreach ($category->posts as $post)
                                @if ($loop->first)
                                    {{-- First Item --}}
                                    <x-item-card-categories first=1 :thumb="$post->thumb" :author="$post->user->display_name" :date="date('d/m/Y', strtotime($post->created_at))"
                                        link="/" :name="$post->name" :content="$post->content" />
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="p-list">
                            {{-- Foreach item --}}
                            @if ($category->child->count() > 0)
                                @foreach ($category->child as $child)
                                    @foreach ($child->posts as $post)
                                        @if (!$loop->first)
                                            {{-- First Item --}}
                                            <x-item-card-categories first=0 :thumb="$post->thumb" :author="$post->user->display_name"
                                                :date="date('d/m/Y', strtotime($post->created_at))" link="/" :name="$post->name" :content="$post->content" />
                                        @endif
                                    @endforeach
                                @endforeach
                            @else
                                @foreach ($category->posts as $post)
                                    @if (!$loop->first)
                                        {{-- First Item --}}
                                        <x-item-card-categories first=0 :thumb="$post->thumb" :author="$post->user->display_name"
                                            :date="date('d/m/Y', strtotime($post->created_at))" link="/" :name="$post->name" :content="$post->content" />
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Lastest Post --}}
        <div class="title h3 text-danger mt-5"><span class="title-span fw-bold">Bài viết mới nhất</span></div>
        <div class="border border-secondary rounded" id="lastest-list">
            {{-- Foreach lastest post --}}
            @forelse ($lastest as $post)
                <x-lastes-post :thumb="$post->thumb" :author="$post->user->display_name" :date="date('d/m/Y', strtotime($post->created_at))" :category="$post->category->name" link="/"
                    :name="$post->name" :content="$post->content" />
            @empty
            @endforelse
            <div class="m-2 text-center">
                <button class="btn btn-outline-secondary rounded-5 px-4" id="btn-load">Load more</button>
            </div>
        </div>
    </div>
@endsection
