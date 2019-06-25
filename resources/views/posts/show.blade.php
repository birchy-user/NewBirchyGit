@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
    </div>
    <div class="col-8 pt-4 ">
        <h3>{{ $post->user->username }}</h3>

        <p><?php echo $post->caption; ?></p>
    </div>
</div>
    
@endsection