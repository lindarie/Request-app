<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Comments;
class Requests extends Model
{
    use HasFactory;
    public function users()
    { // FKrelationship
        return $this->hasMany(Users::class);
    }
    public function comments()
    { // FK relationship
        return $this->belongsTo(Comments::class);
    }
}
