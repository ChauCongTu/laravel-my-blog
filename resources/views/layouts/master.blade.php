<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') | ChauCongTu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet" />
    @stack('styles')
</head>

<body>
    <header>
        @include('blocks.header')
    </header>
    <main class="container">
        @yield('main-sidebar')
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                <div class="border border-secondary rounded">
                    <p class="p3">
                    <div class="d-block text-center logo fw-bold"><a href="{{ route('home') }}"> TaoDiCodeDoi <span
                                class="domain">.Site</span></a></div>
                    </p>
                    <p class="text-muted px-5 text-center">Blog chia sẻ tất cả những gì mình biết đến mọi người. Bạn có
                        thể tìm
                        thấy Patch PES từ
                        PES 2013, PES
                        2016, PES 2017, PES 2018 cho đến PES 2022. Và bạn cũng có thể tìm thấy các thủ thuật máy tính
                        Windows,
                        Ubuntu, thủ thuật facebook, thủ thuật internet, thủ thuật Android.</p>
                </div>
                {{-- Top 5 Post --}}
            </div>
        </div>
    </main>
    <footer>
        @include('blocks.footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('assets/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
