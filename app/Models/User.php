<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Followable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline() {
        // return Tweet::where('user_id', $this->id)->latest()->get();
        $ids = $this->follows()->pluck('id');
        // $ids->push($this->id);

        return Tweet::whereIn('user_id', $ids)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(20);
    }

    public function tweets() {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getAvatarAttribute($value) {
        // return "https://robohash.org/". $this->email;
        if($value) {
            return asset('storage/' . $value); //          ?: 'https://robohash.org/' . $this->username);
        } else {
            return "https://robohash.org/". $this->username;
        }
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
