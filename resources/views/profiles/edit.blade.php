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
                        Add a New Post (nahoy)
                    </h3>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post caption</label>

                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file", class="pt-3 form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                    
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">
                        Add New Post :)
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>
    
@endsection
