<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileDesc extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class); // Fetches an user_id from a user
    }
}
