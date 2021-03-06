<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comments;
class Requests extends Model
{
    protected $fillable = ['request_type', 'status', 'name','priority', 'date', 'description', 'userID'];
    use HasFactory;
    public function users()
    { // FKrelationship
        return $this->hasMany(User::class);
    }
    public function comments()
    { // FK relationship
        return $this->belongsTo(Comments::class);
    }
}
