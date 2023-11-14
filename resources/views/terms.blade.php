@extends('layout.app')

@section('title', 'Terms')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <h1>Terms</h1>
            <div>
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                obscure
                Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a
                treatise
                on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                dolor
                sit amet..", comes from a line in section 1.10.32.
                <br>
                <span>
                    <a href="https://github.com/Vasutron">
                        <img src="https://raw.githubusercontent.com/FortAwesome/Font-Awesome/f0c25837a3fe0e03783b939559e088abcbfb3c4b/svgs/brands/github.svg"
                            width="50px">
                        <B> Writing practitioner Follow Us</B></a>
                </span>
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
