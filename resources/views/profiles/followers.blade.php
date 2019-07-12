@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
        @foreach($followers as $user)
            <div class="py-2 d-flex align-items-center justify-content-center">
                <img src="{{ $user->profile->profileImage() }}" style="width: 50px; margin-right: 7px">
                <a href="/profile/{{ $user->id }}">{{ $user->username }}</a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection