@unless ($breadcrumbs->isEmpty())
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <span class="text-muted fw-light"><a class="text-muted fw-light" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a> / </span>
            @else
                {{ $breadcrumb->title }}
            @endif
        @endforeach
    </h4>

@endunless
