<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Profile extends Model
{

    protected $guarded = [];
    
    public function profileImage()
    {
        $pathToImage = ($this->image) ? $this->image : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';
        return '/storage/' . $pathToImage;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}