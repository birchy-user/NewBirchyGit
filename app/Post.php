<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];   /// tells Laravel to make all attributes mass-assignable
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
