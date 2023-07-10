<div class="d-flex justify-content-center p-3 border-bottom border-secondary mx-2">
    <div class="n-img col-4">
        <img src="{{ $thumb }}" class="scale-zoom rounded w-100" alt="{{ $name }}">
    </div>
    <div class="col-8 ms-3">
        <div class="n-auth">
            <span class="post-author me-2"><i class="fa fa-user me-2"></i>{{ $author }}</span> &#8226;
            <span class="date-post ms-2 me-2">{{ $date }}</span> &#8226; <span
                class="date-post ms-2">{{ $category }}</span>
        </div>
        <div class="n-name">
            <a href="{{ $link }}">
                {{ $name }}
            </a>
        </div>
        <div class="n-content">
            {{ $content }}
        </div>
    </div>
</div>
