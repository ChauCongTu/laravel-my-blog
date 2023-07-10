@extends('layouts.master')
@section('title')
    Blog chia sẻ thủ thuật, công nghệ
@endsection
@section('content')
    <section class="new-posts mt-3">
        <div class="posts slick-pane text-center">
            <x-item-card
                thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                category="Thủ thuật Window"
                name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative Fill"
                author="Châu Quế Nhơn" date="09/07/2023" />
            <x-item-card
                thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                category="Thủ thuật Window"
                name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative Fill"
                author="Châu Quế Nhơn" date="09/07/2023" />
        </div>
    </section>
    <div class="row">

        <div class="col-md-8 p-2">
            {{-- Foreach Category --}}
            <div class="title h3 text-danger mb-3"><span class="title-span fw-bold">Danh mục</span></div>
            <div class="list border border-lg border-secondary rounded">
                <div class="row p-3">
                    <div class="col-md-6">
                        {{-- First Item --}}
                        <x-item-card-categories first=true
                            thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                            author="Nhon Chau" date="29/04/2023" link="/"
                            name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                            Generative Fill"
                            content="Blog chia sẻ tất cả những gì mình biết đến mọi người. Bạn có thể tìm thấy Patch PES từ PES 2013, PES 2016, PES 2017, PES 2018 cho đến PES 2022. Và bạn cũng có thể tìm thấy các thủ thuật máy tính Windows" />
                    </div>
                    <div class="col-md-6">
                        <div class="p-list">
                            {{-- Foreach item --}}
                            <x-item-card-categories first=0
                                thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                                author="Nhon Chau" date="29/04/2023" link="/"
                                name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                            Generative Fill"
                                last=0
                                content="Blog chia sẻ tất cả những gì mình biết đến mọi người. Bạn có thể tìm thấy Patch PES từ PES 2013, PES 2016, PES 2017, PES 2018 cho đến PES 2022. Và bạn cũng có thể tìm thấy các thủ thuật máy tính Windows" />

                            <x-item-card-categories first=0
                                thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                                author="Nhon Chau" date="29/04/2023" link="/"
                                name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                            Generative Fill"
                                last=1
                                content="Blog chia sẻ tất cả những gì mình biết đến mọi người. Bạn có thể tìm thấy Patch PES từ PES 2013, PES 2016, PES 2017, PES 2018 cho đến PES 2022. Và bạn cũng có thể tìm thấy các thủ thuật máy tính Windows" />

                        </div>
                    </div>
                </div>
            </div>
            {{-- Lastest Post --}}
            <div class="title h3 text-danger mt-5"><span class="title-span fw-bold">Bài viết mới nhất</span></div>
            <div class="border border-secondary rounded" id="lastest-list">
                {{-- Foreach lastest post --}}
                <x-lastes-post
                    thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                    author="Nhon Chau" date="21/01/2023" category="Thủ thuật Window" link="/"
                    name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative Fill"
                    content="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative Fill" />
                <x-lastes-post
                    thumb="https://tuong.me/wp-content/uploads/2023/07/cach-cai-dat-adobe-photoshop-beta-mien-phi-de-su-dung-tinh-nang-Generative-Fill-6-1140x540.webp"
                    author="Nhon Chau" date="21/01/2023" category="Thủ thuật Window" link="/"
                    name="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative Fill"
                    content="Cách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative FillCách cài đặt Adobe Photoshop beta miễn phí để sử dụng
                Generative Fill" />
                <div class="m-2 text-center">
                    <button class="btn btn-outline-secondary rounded-5 px-4" id="btn-load">Load more</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-2">
            <div class="border border-secondary rounded">
                <p class="p3">
                <div class="d-block text-center logo fw-bold"><a href="{{ route('home') }}"> TaoDiCodeDoi <span
                            class="domain">.Site</span></a></div>
                </p>
                <p class="text-muted px-5 text-center">Blog chia sẻ tất cả những gì mình biết đến mọi người. Bạn có thể tìm
                    thấy Patch PES từ
                    PES 2013, PES
                    2016, PES 2017, PES 2018 cho đến PES 2022. Và bạn cũng có thể tìm thấy các thủ thuật máy tính Windows,
                    Ubuntu, thủ thuật facebook, thủ thuật internet, thủ thuật Android.</p>
            </div>
            {{-- Top 5 Post --}}
        </div>
    </div>
@endsection
