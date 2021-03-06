<?php

namespace App\Models;

use App\Models\Comments;
use App\Models\Groups;
use App\Models\Requests;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['name', 'surname', 'groupID','email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function groups()
    {
        return $this->hasMany(Groups::class);
    }
    public function comments()
    { // FK relationship
        return $this->belongsTo(Comments::class);
    }
    public function requests()
    { // FK relationship
        return $this->belongsTo(Requests::class);
    }
    public function isUser()
    {
        if($this->groupID === 1) {return true;}
        else {return false;}
    }
    public function isAdministrator()
    {
        if($this->groupID === 2) {return true;}
        else {return false;}
    }
    public function isDepartment()
    {
        if($this->groupID === 3) {return true;}
        else {return false;}
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
