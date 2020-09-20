    @if (count($events) > 0)
        @foreach ($events as $event)
            <div class="well event-card">
                <small>{{ $event->datetime }}</small>
                <div class="image-wrapper">
                    <img src="{{ $event->lead_image }}">
                </div>
                <hr class="hr-text" data-content="{{ $event->type }}">
                <h3>{{ $event->title }}</h3>
            </div>
        @endforeach
    @else
        <div>
            <p>Nav notikumu</p>
        </div>
    @endif
    <div class="pagination-wrapper">
        {{ $events->links('inc.pagination') }}
    </div>
