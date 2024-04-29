@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex justify-content-center">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle align-self-center"
                    style="width: 150px; height: 150px;">
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-baseline">

                    <div class="d-flex pb-3" id="app">
                        <h1 style="padding-right: 30px;">{{ $user->username }}</h1>
                        <follow-button></follow-button>
                    </div>


                    @can('update', $user->profile)
                        <a href="/p/create" style="text-decoration: none;">Add New Post</a>
                    @endcan


                </div>

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit" style="text-decoration: none;">Edit Profile</a>
                @endcan

                <div class="d-flex">
                    <div style="padding-right: 30px;"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div style="padding-right: 30px;"><strong>23k</strong> followers</div>
                    <div style="padding-right: 30px;"><strong>212</strong> following</div>
                </div>
                <div style="padding-top: 30px; font-weight: bold;">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#" style="text-decoration: none;">{{ $user->profile->url }}</a></div>

            </div>
        </div>

        <div class="row">
            @foreach ($user->posts as $post)
                <div class="col-4 pt-4" style="max-width: 300px; max-height: 300px; overflow: hidden;">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" style="width: 100%; height: 100%;">
                    </a>
                </div>
            @endforeach


        </div>
    </div>
@endsection
