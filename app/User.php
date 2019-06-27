<?php
namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'users_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'username','name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();  ///the User class is calling the boot method for the Authenticatable class
                         /// when a user gets registered, this function is called in the process

        static::created(function ($user) 
        {

            $user->profile()->create([
                'title' => $user->name . ' ' . $user->surname, /// user->username
            ]);

        });                  /// this event gets fired whenever a new user gets created (Eloquent model Events)
                             /// whenever a user gets created, a new (empty) profile is created for that specific user
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    // Fetch the profile of a user
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}