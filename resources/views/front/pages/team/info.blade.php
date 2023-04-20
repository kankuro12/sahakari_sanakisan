@if (!empty($team->addr))
    <div class="team-link">
        <i class="bi bi-geo-alt-fill"></i> {{ $team->addr }}
    </div>

@endif
@if (!empty($team->phone))
    <div class="team-link">
        <a href="tel:{{ $team->phone }}">
            <i class="bi bi-phone-fill"></i> {{ $team->phone }}
        </a>
    </div>

@endif

@if (!empty($team->email))
    <div class="team-link">
        <a href="mailto:{{ $team->email }}">
            <i class="bi bi-envelope-fill"></i> {{ $team->email }}
        </a>
    </div>

@endif


<div class="team-link d-flex m">
    @if (!empty($team->fb))
        <a href="{{ $team->fb }}" class="btn btn-square mt-2 me-2">
            <i class="bi bi-facebook"></i>
        </a>
    @endif
    @if (!empty($team->li))
        <a href="{{ $team->li }}" class="btn btn-square mt-2 me-2">
            <i class="bi bi-linkedin"></i>
        </a>
    @endif
    @if (!empty($team->tw))
        <a href="{{ $team->tw }}" class="btn btn-square mt-2 me-2">
            <i class="bi bi-twitter"></i>
        </a>
    @endif
</div>
