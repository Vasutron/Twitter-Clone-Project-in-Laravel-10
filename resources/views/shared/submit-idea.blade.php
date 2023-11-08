@auth
    <h4> Share yours MergeMix! </h4>
    <div class="row">
        <form action="{{ route('ideas.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" id="content" rows="3" placeholder="คุณกำลังคิดอะไรอยู่..."></textarea>
                @error('content')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-dark"> โพสต์ </button>
            </div>
        </form>
    </div>
@endauth
@guest
    <h4> โปรดเข้าสู่ระบบ เพื่อแชร์ไอเดียของคุณ! </h4>
    <br>
    <span> Login To Share yours ideas! </span>
@endguest
