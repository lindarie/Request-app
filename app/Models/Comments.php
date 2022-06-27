<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Requests;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'requestID', 'userID'];
    public function users()
    { // FKrelationship
        return $this->hasMany(User::class);
    }
    public function requests()
    { // FKrelationship
        return $this->hasMany(Requests::class);
    }
}
