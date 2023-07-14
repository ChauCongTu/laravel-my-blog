<div class="container border-bottom border-secondary">
    <div class="d-flex py-5 justify-content-between align-items-center">
        <div class="col-6">
            <div class="logo fw-bold"><a href="{{ route('home') }}"> TaoDiCodeDoi <span class="domain">.Site</span></a>
            </div>
        </div>
        <div class="col-6">
            <div class="linked d-flex justify-content-end">
                <a href="" class="linked-item ps-3"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="" class="linked-item ps-3"><i class="fa-brands fa-twitter"></i></a>
                <a href="" class="linked-item ps-3"><i class="fa-brands fa-pinterest"></i></a>
                <a href="" class="linked-item ps-3"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="" class="linked-item ps-3"><i class="fa-brands fa-youtube"></i></a>
                <a href="" class="linked-item ps-3"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light py-4" id="nav-header">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2 navbar-custom bg-grd" href="{{ route('home') }}">
            <i class="fa-solid fa-house"></i>
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($categories as $category)
                    @if ($category->child()->count() > 0)
                        <li class="nav-item px-3">
                            <a class="nav-link"
                                href="{{ route('category.detail', ['slug' => Str::slug($category->name), 'id' => $category->id]) }}">{{ $category->name }}<i
                                    class="fa-solid fa-chevron-down ms-2"></i></a>
                            <ul class="nav-link-sub_item list-group">
                                @foreach ($category->child()->get() as $child)
                                    <a
                                        href="{{ route('category.detail', ['slug' => Str::slug($child->name), 'id' => $child->id]) }}">{{ $child->name }}</a>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="nav-item px-3">
                            <a class="nav-link"
                                href="{{ route('category.detail', ['slug' => Str::slug($category->name), 'id' => $category->id]) }}">{{ $category->name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <!-- Left links -->

            <div class="d-flex align-items-center">
                <form class="d-flex input-group w-auto" action="{{ route('search') }}">
                    <input type="search" class="form-control" name="s" placeholder="Tìm kiếm" />
                    <button class="btn bg-grd text-white border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <button class="btn bg-grd ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_menu"
            aria-controls="nav_menu">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<div class="offcanvas offcanvas-end" style="background-color: #142030" tabindex="-1" id="nav_menu"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom border-secondary mx-2">
        <div id="offcanvasRightLabel">
            <div class="logo fw-bold mt-3 mb-3">
                <a href="{{ route('home') }}"> ChauCongTu <span class="domain">.Site</span></a>
            </div>
            <div class="">
                <button type="button" class="btn bg-grd text-white btn-sm mt-2" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i class="fa-solid fa-x me-2"></i> Đóng</button>
            </div>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="list-group list-group-light">
            <div class="item pb-2 border-bottom border-secondary">
                <form class="d-flex input-group w-auto" action="{{ route('search') }}">
                    <input type="search" class="form-control" name="s" placeholder="Tìm kiếm" />
                    <button class="btn bg-grd text-white border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            @foreach ($categories as $category)
                @if ($loop->last)
                    <div class="item p-2">
                        <a class="btn btn-link text-white fw-bold"
                            href="{{ route('category.detail', ['slug' => Str::slug($category->name), 'id' => $category->id]) }}">{{ $category->name }}</a>
                    </div>
                @else
                    <div class="item border-bottom p-2 border-secondary">
                        <a class="btn btn-link text-white fw-bold"
                            href="{{ route('category.detail', ['slug' => Str::slug($category->name), 'id' => $category->id]) }}">{{ $category->name }}</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
