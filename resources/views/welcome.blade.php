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
        </div>
    </section>
    <div class="row">
        <div class="col-8 p-2">
            <div class="title h4 text-danger"><span class="border-bottom border-danger">Danh mục</span></div>
            <div class="list">

            </div>
        </div>
        <div class="col-4 p-2">
            <div class="border border-secondary rounded">
                <p class="p3">
                <div class="d-block text-center logo fw-bold"><a href="{{ route('home') }}"> TaoDiCodeDoi <span
                            class="domain">.Site</span></a></div>
                </p>
                <p class="text-muted px-5 text-center">Blog chia sẻ tất cả những gì mình biết đến mọi người. Bạn có thể tìm thấy Patch PES từ
                    PES 2013, PES
                    2016, PES 2017, PES 2018 cho đến PES 2022. Và bạn cũng có thể tìm thấy các thủ thuật máy tính Windows,
                    Ubuntu, thủ thuật facebook, thủ thuật internet, thủ thuật Android.</p>
            </div>
        </div>
    </div>
@endsection
