<div class="card">
    @if (!empty($title))
    <header class="card-header has-background-link">
        <p class="card-header-title has-text-light">
            {!! $title !!}
        </p>
    </header>
    @endif

    <div class="card-content">
        {!! $slot !!}
    </div>

    @if(!empty($footer))
    <footer class="card-footer">
        {!! $footer !!}
    </footer>
    @endif
</div>
