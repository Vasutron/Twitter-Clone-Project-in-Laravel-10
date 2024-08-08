@extends('layout.app')
{{--  Admin Dashboard  --}}
@section('title', 'Admin Dashboard')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('admin.shared.left-sidebar')
        </div>
        <div class="col-9">
            <h1 class="text-white bg-primary rounded"> Admin Dashboard</h1>
            <hr>

            <div class="row">
                <div class="col-sm-4">
                    @include('shared.widget',[
                        'title' => 'Total Users',
                        'icon' => 'fas fa-users',
                        'data' => $totalUsers,
                        'link' => route('admin.users.index'),
                        'btnText' => 'Go Users'
                    ])
                </div>
                <div class="col-sm-4">
                    @include('shared.widget',[
                        'title' => 'Total Ideas',
                        'icon' => 'far fa-lightbulb',
                        'data' => $totalIdeas,
                        'link' => route('admin.ideas.index'),
                        'btnText' => 'Go Ideas'
                    ])
                </div>
                <div class="col-sm-4">
                    @include('shared.widget',[
                        'title' => 'Total Comments',
                        'icon' => 'fas fa-comment',
                        'data' => $totalComments,
                        'link' => route('admin.comments.index'),
                        'btnText' => 'Go Comments'
                    ])
                </div>
            </div>

        </div>
    </div>
@endsection

