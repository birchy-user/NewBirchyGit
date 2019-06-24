@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="rounded" style="max-width: 250px;">
        </div>

        <div class="col-9 pt-3 pl-5">
            <div><h2><?php echo Auth::user()->username; ?></h2></div> <!-- Returns the user's username -->
            <div><strong> {{ $user->posts->count() }} </strong>Posts</div>  <!-- Returns the count of a user's posts -->
            <div class="pt-4">{{ $user->profile->title }}</div>
            <div class="pt-4">{{ $user->profile->description }}</div>
            <div class="d-flex pt-3 pb-2">
                <button><a href="/p/create">Add a post</a></button>             <!-- When a user clicks this link, it will redirect him to the create method of post -->
            </div>
            <div class="d-flex pt-3">
                <button><a href="/profile/{{ $user->users_id }}/edit">Edit Profile</a></button>
            </div>
        </div>
    </div>
    
    <div class="row pt-5 pl-3" style="max-width: 1100px; max-height: 1100px;">
        @foreach($user->posts as $post)
        <div class="col-4 pb-3">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100 h-100"></a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection
