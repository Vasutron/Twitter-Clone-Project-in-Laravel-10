<div class="card">
    <div class="card-body">
        <h5 class="card-title"> <span class="{{ $icon ?? 'fas fa-user' }}"></span> {{ $title ?? ''}}</h5>
        <hr>
        <h2 class="fw-bold fs-2 text-center">{{ $data ?? 0 }}</h2>
        <a href="{{ $link ?? '#' }}" class="btn btn-primary btn-sm">
            {{ $btnText ?? 'Go' }}
        </a>
    </div>
</div>
