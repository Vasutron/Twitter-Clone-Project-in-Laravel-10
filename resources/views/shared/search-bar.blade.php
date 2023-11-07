<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard') }}" method="GET">
            <input
                name="search"
                placeholder="ค้นหา..."
                class="form-control w-100"
                type="text"
            >
            <button class="btn btn-dark mt-2"> Search</button>
        </form>
    </div>
</div>

{{-- https://www.youtube.com/watch?v=6jEN2v1eSNI&list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU&index=23 --}}
