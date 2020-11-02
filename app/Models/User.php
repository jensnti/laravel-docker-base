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
        'name',
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
            ->latest()->get();
    }

    public function tweets() {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getAvatarAttribute() {
        return "https://robohash.org/". $this->email;
    }

    public function path()
    {
        return route('profile', $this->name);
    }
}
