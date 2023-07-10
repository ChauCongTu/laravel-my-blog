@if (!$first)
    @if (!$last)
        <div class="l-item d-flex justify-content-center border-bottom border-secondary pb-2 mb-2">
            <div class="l-img col-4 mt-1">
                <img src="{{ $thumb }}" alt="{{ $name }}" class="scale-zoom rounded">
            </div>
            <div class="l-content col-8 ms-3">
                <div class="l-name">
                    <a href="{{ $link }}">
                        {{ $name }}
                    </a>
                </div>
                <div class="date mt-2">{{ $date }}</div>
            </div>
        </div>
    @else
        <div class="l-item d-flex justify-content-center">
            <div class="l-img col-4 mt-1">
                <img src="{{ $thumb }}" alt="{{ $name }}" class="scale-zoom rounded">
            </div>
            <div class="l-content col-8 ms-3">
                <div class="l-name">
                    <a href="{{ $link }}">
                        {{ $name }}
                    </a>
                </div>
                <div class="date mt-2">{{ $date }}</div>
            </div>
        </div>
    @endif
@else
    <div class="p-item">
        <div class="p-img rounded">
            <img src="{{ $thumb }}"
                alt="{{ $name }}" class="scale-zoom rounded">
        </div>
        <div class="p-author">
            <span class="post-author me-2"><i class="fa fa-user me-2"></i>{{ $author }}</span> &#8226;
            <span class="date-post ms-2">
                {{ $date }}
            </span>
        </div>
        <div class="p-name mt-2">
            <a href="">{{ $name }}</a>
        </div>
        <div class="p-content">
            {{ $content }}
        </div>
    </div>
@endif
