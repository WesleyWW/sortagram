@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" style="width: 100%" class="w-100">
    </div>
    <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>

            <a href="/p/create">Add New Post</a>
        </div>
        <div class="d-flex align-items-center py-3">
            @can('update', $user->profile)
                <div class="pr-5">
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                </div>
            @endcan
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
        </div>
        
        <div class="d-flex">
            <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
            <div class="pr-5"><strong>{{ $followerCount }}<a href="/profile/{{ $user->id }}/followers"> followers</a></strong></div>
            <div class="pr-5"><strong>{{ $followingCount }}<a href="/profile/{{ $user->id }}/following"> following</a></strong></div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="http://sextuple-u.biz">{{ $user->profile->url }}</a></div>
    </div>
   </div>
   
   <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    
    
   </div>
</div>
@endsection
