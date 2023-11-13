<div>
    <form action="{{ route('ideas.comments.store', $idea->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="fs-6 form-control" rows="1" placeholder="เขียนแสดงความคิดเห็นของคุณ..."></textarea>
            {{-- @error('content')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror --}}
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> แสดงความคิดเห็น </button>
        </div>
    </form>
    <hr>
    {{-- <br> --}}
    @forelse ($idea->comments as $comment)
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle" src="{{ $comment->user->getImageURL() }}"
                alt="{{ $comment->user->name }}">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="">{{ $comment->user->name }}
                    </h6>
                    <small class="fs-6 fw-light text-muted"> {{ $comment->created_at->diffForHumans() }}</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    {{ $comment->content }}
                </p>
            </div>
        </div>
    @empty
        <p class="fs-6 fw-light text-muted text-center"> ยังไม่มีความคิดเห็น </p>
    @endforelse
</div>

{{-- https://www.youtube.com/watch?v=HoIt29hUO-s&list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU&index=36 10:50 --}}
