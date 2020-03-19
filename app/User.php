<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'image', 'provider', 'provider_id', 'password',
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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resolveRouteBinding($user)
    {
        return $this->where('username', $user)->first() ?? $this->find($user) ?? abort(404);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function linearProblem(){
        return $this->hasMany(LinearProblem::class);
    }

    public function sentMail(){
        return $this->hasMany(Mail::class, 'from_id');
    }

    public function receivedMail(){
        return $this->hasMany(Mail::class, 'to_id');
    }
}
