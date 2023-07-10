<div class="new-item text-center">
    <div class="bg-image rounded">
        <img src="{{ $thumb }}" class="scale-zoom w-100">
    </div>
    <div class="content d-flex align-items-center justify-content-center">
        <div>
            <div class="category mb-2"><span class="bg-grd py-2 px-3 rounded-5">{{ $category }}</span></div>
            <div class="name mb-3"><a href="{{ $link }}">{{ $name }}</a></div>
            <div class="d-flex justify-content-center">
                <div class="post-author me-2">{{ $author }}</div> &#8226; <div class="date-post ms-2">
                    {{ $date }}
                </div>
            </div>
        </div>
    </div>
</div>
