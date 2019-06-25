@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->users_id }}" enctype="multipart/form-data" method="post">   <!-- Correct enc type for file upload + post method for sending data to post route-->
        @csrf   <!-- Generates a token that is used to verify that the authenticated user is the one actually making the requests to the application. (From Laravel Docs) -->

        @method('PATCH') <!-- We use the method PATCH internally to  -->


        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h3>
                        Edit your profile
                    </h3>
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file", class="pt-3 form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">New Title</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">New description</label>

                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description}}" autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">
                        Done
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>
    
@endsection