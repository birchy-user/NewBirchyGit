<div>
    <div class="row">

        <h3><?php echo $user->users_id; ?></h3>
        <label for="image" class="col-md-4 col-form-label">Choose a new profile image</label>

        <input type="file", class="pt-3 form-control-file" id="image" name="image">

        @error('image')
            <strong>{{ $message }}</strong>
        @enderror
        
    </div>
</div>