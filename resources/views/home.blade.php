@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="rounded" style="max-width: 250px;">
        </div>

        <div class="col-9 pt-3 pl-5">
            <div><h2>{{ Auth::user()->username }}</h2></div> <!-- Atgriez lietotaja username  -->
            <div><strong>100 </strong>Posts</div>
            <div class="pt-4">Some kind of text here rrvbvjbvjebvjfvhgefvbvghvgefvbvhjsgrijewuighrktjghtygkhhuh</div>
        </div>
    </div>
    
    <div class="row pt-5 pl-3" style="max-width: 1100px; max-height: 1100px;">
        <div class="col-4">
            <img src="https://s14.postimg.cc/y45dgg64h/Nico_nice_suit.png" class="w-100" >
        </div>
        <div class="col-4">
            <img src="https://s14.postimg.cc/y45dgg64h/Nico_nice_suit.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://s14.postimg.cc/y45dgg64h/Nico_nice_suit.png" class="w-100">
        </div>
    </div>
</div>
    
@endsection
